<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class AdminLogin extends Component
{
    public $email, $password, $remember;
    public function render()
    {
        return view('livewire.admin.auth.admin-login')->layout('layouts.login-app')->layoutData([
            'title' => 'Login || MENo~MEN',
        ]);
    }

    public function login(){
        $validated = $this->validate([
'email' => 'required|email|min:4|max:50',
'password' => 'required|min:4|max:50',
        ]);
    if(Auth::guard('admin')->attempt($validated, $this->remember)){
        // RateLimiter::hit($this->throttleKey());
        return redirect()->route('admin_dashboard');
    }else{
        session()->flash('error', 'Invalid email and password');
        // return redirect()->route('admin_login');
    }

}

}