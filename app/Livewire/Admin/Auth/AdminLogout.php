<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogout extends Component
{
    public function render()
    {
        return view('livewire.admin.auth.admin-logout');
    }

    // public function __invoke(): void
    // {
    //     Auth::guard('admin')->logout();

    //     // Sessios::invalidate();
    //     // Session::regenerateToken();
    // }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }

}