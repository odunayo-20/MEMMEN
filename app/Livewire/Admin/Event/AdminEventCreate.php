<?php

namespace App\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEventCreate extends Component
{
    
    public $title,$location,$content, $date, $time, $status, $image;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.admin.event.admin-event-create')->layout('layouts.admin-app')->layoutData([
            'title' => 'Event || MENo~MEN'
        ]);
    }


    public function store(){
        $validated = $this->validate([
           'title' => 'required', 
           'location' => 'required', 
           'content' => 'required', 
           'date' => 'required', 
           'time' => 'required', 
           'image' => 'required', 
           'status' => 'required', 
        ]);
// if($this->image){
$image = $this->image->store('public/events');
// }
        $event = Event::create([
'title' => $this->title,
'location' => $this->location,
'content' => $this->content,
'date' => $this->date,
'time' => $this->time,
'status' => $this->status,
'image' => $image,
        ]);
        $this->reset();
        session()->flash('success', 'Event Successfully created');
      return $this->redirect(route('admin_event'), navigate:true);
    }
}