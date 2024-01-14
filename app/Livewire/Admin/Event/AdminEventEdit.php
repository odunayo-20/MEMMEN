<?php

namespace App\Livewire\Admin\Event;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEventEdit extends Component
{
    public $title,$location,$content, $date, $time, $status, $old_image, $new_image;
    public $event;
    use WithFileUploads;

    public function render()
    {
        return view('livewire.admin.event.admin-event-edit')->layout('layouts.admin-app')->layoutData([
            'title' => 'Event || MENo~MEN'
        ]);
    }

    public function mount(Event $event){
        $this->event = $event;
        $this->title = $event->title;
        $this->content = $event->content;
        $this->location = $event->location;
        $this->date = $event->date;
        $this->time = $event->time;
        $this->status = $event->status;
        $this->old_image = $event->image;
    }

    public function store(){
        $validated = $this->validate([
           'title' => 'required', 
           'location' => 'required', 
           'content' => 'required', 
           'date' => 'required', 
           'time' => 'required', 
        //    'image' => 'required', 
           'status' => 'required', 
        ]);
        $image = $this->event->image;
if($this->new_image){
    Storage::delete($this->old_image);

$image = $this->new_image->store('public/events');
}
        $this->event->update([
'title' => $this->title,
'location' => $this->location,
'content' => $this->content,
'date' => $this->date,
'time' => $this->time,
'status' => $this->status,
'image' => $image,
        ]);
        $this->reset();
        session()->flash('success', 'Event Successfully Updated');
      return $this->redirect(route('admin_event'), navigate:true);
    }
}