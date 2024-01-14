<?php

namespace App\Livewire\Admin\Team;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTeam extends Component
{
    use WithPagination;
#[Url(history:true, keep:true)]
    public $search = '';
    public $pagination = 10;
    
    public function render()
    {
        if(!$this->search){

            $teams = Team::latest()->paginate($this->pagination);
        }else{
            $teams = Team::latest()->where('name','like','%'.$this->search.'%')->orWhere('profession', 'like','%'.$this->search.'%')->orWhere('status', 'like','%'.$this->search.'%')->orWhere('created_at', 'like','%'.$this->search.'%')->paginate($this->pagination);

        }
        return view('livewire.admin.team.admin-team', compact('teams'))->layout('layouts.admin-app')->layoutData([
            'title' => 'Team || MENo~MEN'
        ]);
    }

    public function updatedSearch(){
        $this->resetPage();
    }

    public function delete(Team $team){
        $team  = $team;
        $team->delete();
        Storage::delete($team->image);
        $team->delete();
        session()->flash('success', 'Team Successfully Deleted');
        return $this->redirect(route('admin_team'), navigate:true);
    }
}