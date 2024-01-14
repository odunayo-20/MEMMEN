<?php

namespace App\Livewire\Frontend;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $name,$email,$subject,$message;
    public function render()
    {
        return view('livewire.frontend.contact')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Contact || MENo~MEN',
        ]);
    }

    public function store(){
      $validated =  $this->validate([
'name' => 'required|unique:contacts',
'email' => 'required|email|unique:contacts',
'subject' => 'required|string',
'message' => 'required|string',
        ]);

       ModelsContact::create($validated);
       session()->flash('success', 'Details Successfully Submitted');
       return redirect(route('contact')); 
    }
}