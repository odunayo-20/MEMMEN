<?php

namespace App\Livewire\Admin\Donate;

use Livewire\Component;

class AdminDonateView extends Component
{
    public function render()
    {
        return view('livewire.admin.donate.admin-donate-view')->layout('layouts.admin-app')->layoutData([
            'title' => 'Donate || MENo~MEN'
        ]);;
    }
}