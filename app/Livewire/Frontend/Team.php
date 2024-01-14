<?php

namespace App\Livewire\Frontend;

use App\Models\Team as ModelsTeam;
use Livewire\Component;

class Team extends Component
{
    public $teams= []; 
    public function render()
    {
        return view('livewire.frontend.team')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Team || MENo~MEN',
        ]);
    }

    public function mount(){
        $this->teams = ModelsTeam::latest()->where('status', 'Active')->get();
    }
}