<?php

namespace App\Livewire\Frontend\Event;

use App\Models\Event;
use Livewire\Component;

class FrontEvent extends Component
{
    public $events = [];
    public function render()
    {
        return view('livewire.frontend.event.front-event')->layout('layouts.frontend-app')->layoutData([
            'title' => 'MENo~MEN || Event',
        ]);
    }

    public function mount(){
        $this->events = Event::latest()->where('status', 'Active')->get();
    }

}