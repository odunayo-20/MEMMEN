<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Service extends Component
{
    public function render()
    {
        return view('livewire.frontend.service')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Service || MENo~MEN',
        ]);
    }
}