<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;

class AdminContactView extends Component
{
    public $contact =  [];
    public function render()
    {
        return view('livewire.admin.contact.admin-contact-view')->layout('layouts.admin-app')->layoutData([
            'title' => 'Contact || MENo~MEN',
        ]);
    }

    public function mount(Contact $contact){
        $this->contact = $contact;
    }
}
