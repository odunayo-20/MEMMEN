<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class StripeCreate extends Component
{
    public function render()
    {
        return view('livewire.frontend.stripe-create')->layout('layouts.frontend-app');
    }
}