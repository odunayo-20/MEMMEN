<?php

namespace App\Livewire\Email;

use Livewire\Component;

class Email extends Component
{
    public function render()
    {
        return view('livewire.email.email')->layout('layouts.login-app');
    }
}