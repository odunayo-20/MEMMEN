<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class AdminContact extends Component
{
    use WithPagination;
    
#[Url(history:true, keep:true)]
    public $search = '';
    public $pagination = 10;
    public function render()
    {
        if(!$this->search){
            
            $contacts = Contact::latest()->paginate($this->pagination);
        }else{
            $contacts = Contact::latest()->where('name','like','%'.$this->search.'%')->orWhere('email', 'like','%'.$this->search.'%')->orWhere('subject', 'like','%'.$this->search.'%')->orWhere('created_at', 'like','%'.$this->search.'%')->paginate($this->pagination);
            
        }
        return view('livewire.admin.contact.admin-contact', compact('contacts'))->layout('layouts.admin-app')->layoutData([
            'title' => 'Contact || MENo~MEN'
        ]);
    }

    public function updatedSearch(){
        $this->resetPage();
    }


    
    public function delete(Contact $contact){
        $contact = $contact;
        $contact->delete();
        session()->flash('success', 'Contact Successfully Deleted');
        return redirect(route('admin_contact'));

         
    }
}