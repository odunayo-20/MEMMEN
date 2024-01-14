<?php

namespace App\Livewire\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminReset extends Component
{
    public $email,$token,$password,$confirm_password;

    public function mount($token, $email){
        $admin = Admin::where('email', $email)->where('token', $token)->first();
        if(!$admin){
            session()->flash('error', 'Invalid Email or Token');
            return redirect(route('admin_login'));
        }
        }
    public function render()
    {
        $admin = Admin::where('email', $this->email)->where('token', $this->token)->first();
        return view('livewire.admin.auth.admin-reset', compact('admin'))->layout('layouts.login-app')->layoutData([
            'title' => 'Reset-Password || MENo~MEN',
        ]);
    }

    public function resetPassword(){
        $this->validate([
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        
        $admin = Admin::where('email', $this->email)->where('token', $this->token)->first();
$admin->token = " ";
$admin->password = Hash::make($this->password);
$admin->update();
session()->flash('success', 'Password Successfully reset');
return redirect(route('admin_login'));
    }
}