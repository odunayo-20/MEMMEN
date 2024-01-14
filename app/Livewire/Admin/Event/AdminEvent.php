<?php

namespace App\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class AdminEvent extends Component
{
    use WithPagination;
#[Url(history:true, keep:true)]
    public $search = '';
    public $pagination = 10;
    
    public function render()
    {
        if(!$this->search){
            
            $events = Event::latest()->paginate($this->pagination);
        }else{
            $events = Event::latest()->where('title','like','%'.$this->search.'%')->orwhere('status','like','%'.$this->search.'%')->orwhere('created_at','like','%'.$this->search.'%')->paginate($this->pagination);

        }
        return view('livewire.admin.event.admin-event', compact('events'))->layout('layouts.admin-app')->layoutData([
            'title' => 'Event || MENo~MEN'
        ]);
    }

    public function updatedSearch(){
        $this->resetPage();
    }
}