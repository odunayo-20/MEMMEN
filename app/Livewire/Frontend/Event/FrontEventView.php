<?php

namespace App\Livewire\Frontend\Event;

use App\Models\Event;
use Livewire\Component;

class FrontEventView extends Component
{
    public $event = [];
    public function render()
    {
        return view('livewire.frontend.event.front-event-view')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Event',
        ]);
    }

    public function mount(Event $event){
        $this->event = $event;
            }
}