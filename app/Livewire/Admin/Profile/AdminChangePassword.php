<?php

namespace App\Livewire\Admin\Profile;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminChangePassword extends Component
{
    public $password,$Confirm_password,$Old_password;
    public function render()
    {
        return view('livewire.admin.profile.admin-change-password')->layout('layouts.admin-app')->layoutData([
            'title' => 'Update Password'
        ]);
    }

    public function store(){
        $this->validate([
'password' => 'required',
'Confirm_password' => 'required|same:password',
        ]);
        
        $admin = Admin::findOrFail(Auth::guard('admin')->user()->id);
        $admin->password = Hash::make($this->password);
        $admin->save();
        
        session()->flash('success', 'Admin Password Successfully Updated');
        return redirect(route('admin_change_password'));
    }

}