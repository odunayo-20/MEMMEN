<?php

namespace App\Livewire\Frontend;

use App\Models\Donate;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Request;

class StripeSuccess extends Component
{
    public function render()
    {
        return view('livewire.frontend.stripe-success')->layout('layouts.frontend-app');
    }


    public function success(Request $request){
        $session_id = $request->get('session_id');
        if(isset($session_id)){
            $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));
$total = session()->get('amount') * session()->get('quantity');
$response = $stripe->checkout->sessions->retrieve($session_id);
// dd($response);
$payment = new Donate();
$payment->payment_id = $response->id;
$payment->product_name = session()->get('payment_name');
// $payment->quantity = session()->get('quantity');
$payment->amount = session()->get('amount');
$payment->name = session()->get('name');
$payment->email = session()->get('email');
$payment->address = session()->get('home_address');
$payment->phone = session()->get('phone');
// $payment->total_amount = $total;
$payment->currency = $response->currency;
$payment->payer_name = $response->customer_details->name;
$payment->payer_email = $response->customer_details->email;
$payment->payment_status = $response->status;
// $payment->name = '$response->name';
// $payment->email = $response->email;
// $payment->phone = $response->phone;
// $payment->address = $response->home_address;
$payment->payment_method = "Stripe";
$payment->save();
// return "Payment Successful";
return redirect(route('donate'));

session()->forget('payment_name');
session()->forget('quantity');
session()->forget('amount');

// dd($response);

        }
    }

}