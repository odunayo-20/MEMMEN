<?php

namespace App\Livewire\Frontend;

use App\Models\Team;
use Livewire\Component;

class About extends Component
{
    public $teams;
    public function render()
    {
        return view('livewire.frontend.about')->layout('layouts.frontend-app')->layoutData([
            'title' => 'About || MENo~MEN',
        ]);
    }

    public function mount(){
        $this->teams = Team::where('status', 'Active')->get();



    }
}