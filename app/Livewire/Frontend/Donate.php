<?php

namespace App\Livewire\Frontend;

use App\Models\Donate as ModelsDonate;
use Livewire\Component;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Symfony\Component\HttpFoundation\Request;

class Donate extends Component
{
    public $name;

    public $email;

    public $address;

    public $phone;

    public $amount;

    public $currency;

    public $payer_name;

    public $payer_email;

    public $payment_status;

    public $payment_method;

    public $payment_name = 'Donate';

    public $quantity = 1;
    public $btnpayment;

    public function render()
    {
        return view('livewire.frontend.donate')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Donate || MENo~MEN',
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'amount' => 'required|numeric',
            'btnpayment' => 'required',
        ]);

        if ($this->btnpayment == "stripe") {
            # code...

            $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));
            $response = $stripe->checkout->sessions->create([
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => $this->payment_name,
                            ],
                            'unit_amount' => $this->amount * 100,
                        ],
                        'quantity' => $this->quantity,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('stripe_success').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('donate'),
            ]);
    
            // dd($response);
    
            if (isset($response->id) && $response->id != '') {
                session()->put('payment_name', $this->payment_name);
                session()->put('amount', $this->amount);
                session()->put('address', $this->address);
                session()->put('name', $this->name);
                session()->put('phone', $this->phone);
                session()->put('email', $this->email);

                return redirect($response->url);
    
            } else {
                return redirect()->route('stripe_create');
            }
            
        }elseif ($this->btnpayment = "paypal") {
            # code...
            $provider = new PayPalClient;

            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();
    
            $response = $provider->createOrder([
                'intent' => 'CAPTURE',
    
                'application_context' => [
    
                    'return_url' => route('paypal_done'),
                    'cancel_url' => route('paypal_cancel'),
                ],
    
                'purchase_units' => [
                    [
                        'amount' => [
                            'currency_code' => 'USD',
                            'value' => $this->amount,
                        ],
                    ],
                ],
            ]
            );
            // dd($response);
    
            if (isset($response['id']) && $response['id'] != null) {
                foreach ($response['links'] as $link) {
                    if ($link['rel'] == 'approve') {
                        session()->put('product_name', $this->payment_name);
                        session()->put('quantity', $this->quantity);
                        session()->put('address', $this->address);
                        session()->put('name', $this->name);
                        session()->put('phone', $this->phone);
                        session()->put('email', $this->email);
    
                        return redirect()->away($link['href']);
                    }
                }
    
            } else {
                return redirect(route('paypal_cancel'));
            }
    
        } else {
            return "Nothing happen";
        }
        

    }


    // success method for stripe
    public function success(Request $request)
    {
        $session_id = $request->get('session_id');
        if (isset($session_id)) {
            $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));
            $total = session()->get('amount') * session()->get('quantity');
            $response = $stripe->checkout->sessions->retrieve($session_id);
            // dd($response);
            $payment = new ModelsDonate();

            $payment->payment_id = $response->id;
            $payment->fullname = session()->get('name');
            $payment->email = session()->get('email');
            $payment->address = session()->get('address');
            $payment->phone = session()->get('phone');
            $payment->product_name = session()->get('payment_name');
            $payment->amount = session()->get('amount');
            $payment->currency = $response->currency;
            $payment->payer_name = $response->customer_details->name;
            $payment->payer_email = $response->customer_details->email;
            $payment->postal_code = $response->customer_details->address->postal_code;
            $payment->country = $response->customer_details->address->country;
            $payment->state = $response->customer_details->address->state;
            $payment->phone = $response->customer_details->address->phone;
            $payment->payment_status = $response->status;
            $payment->payment_method = 'Stripe';
            $payment->save();
            session()->flash('success', 'Donation is Successfully');

            return redirect(route('donate'));

            session()->forget('payment_name');
            session()->forget('quantity');
            session()->forget('amount');

        }
    }

    public function cancel(){
        session()->flash('error', 'Payment cancelled');
        return redirect(route('donate'));
    }

    // paypal integration

    // public function store(Request $request)
    // {


    // }

        // success method for paypal

    public function done(Request $request)
    {
        $provider = new PayPalClient;

        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        // dd($response);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $payment = new ModelsDonate();
            $payment->payment_id = $response['id'];
            $payment->product_name = session()->get('product_name');
            $payment->fullname = session()->get('name');
            $payment->email = session()->get('email');
            $payment->address = session()->get('address');
            $payment->phone = session()->get('phone');
            $payment->amount = $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'];
            $payment->currency = $response['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'];
            $payment->payer_name = $response['payer']['name']['given_name'];
            $payment->payer_email = $response['payer']['email_address'];
            $payment->payment_status = $response['status'];
            $payment->payment_method = 'Paypal';
            $payment->save();
            session()->flash('success', 'Donate Successfull');

            return redirect(route('donate'));

            unset($_SESSION['product_name']);
            unset($_SESSION['quantity']);

        }
    }

    public function error(){
        session()->flash('error', 'Payment cancelled');
        return redirect(route('donate'));
    }
}