<?php

namespace App\Livewire\Admin\Donate;

use App\Models\Donate;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDonate extends Component
{
    #[Url(history:true, keep:true)]
    public $search = '';
    public $pagination = 10;
    use WithPagination;
    public function render()
    {
        if(!$this->search){
            $donates = Donate::latest()->paginate($this->pagination);
        }else{ 
            $donates = Donate::latest()->where('payer_name','like','%'.$this->search.'%')->orWhere('payer_email', 'like','%'.$this->search.'%')->orWhere('amount', 'like','%'.$this->search.'%')->orWhere('created_at', 'like','%'.$this->search.'%')->paginate($this->pagination);
        }
        return view('livewire.admin.donate.admin-donate', compact('donates'))->layout('layouts.admin-app')->layoutData([
            'title' => 'Donate || MENo~MEN'
        ]);;
    }

public function updatedSearch(){
    $this->resetPage();
}
    
    public function delete(Donate $donate){
        $donate = $donate;
        $donate->delete();
        session()->flash('success', 'Donate Record Deleted Successfully');
        return redirect(route('admin_donate'));
    }

    
}