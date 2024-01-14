<?php

namespace App\Livewire\Frontend;

use App\Models\Event;
use App\Models\Team;
use App\Models\Testimonial;
use Livewire\Component;

class Index extends Component
{
    public $events = [];
    public $teams = [];
    public $testimonial = [];

    public function render()
    {
        return view('livewire.frontend.index')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Home || MENo~MEN',
        ]);
    }

    public function mount(){
        $this->events = Event::latest()->where('status', 'Active')->get();
        $this->teams = Team::latest()->where('status', 'Active')->get();
        $this->testimonial = Testimonial::latest()->where('status', 'Active')->get();



    }

    //     $this->teams = Team::where('status', 'Active')->get();
    // public function mount(){
    // }


}