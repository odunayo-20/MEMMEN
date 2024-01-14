<?php

namespace App\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;

class AdminEventView extends Component
{
    public $event = [];
    
    public function render()
    {
        return view('livewire.admin.event.admin-event-view')->layout('layouts.admin-app')->layoutData([
            'title' => 'Event || MENo~MEN'
        ]);
    }

    public function mount(Event $event){
        $this->event = $event;
    }
}