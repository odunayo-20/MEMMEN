<?php

namespace App\Livewire\Admin\Testimonial;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTestimonial extends Component
{
    use WithPagination;
#[Url(history:true, keep:true)]
    public $search = '';
    public $pagination = 10;
    public function render()
    {
        if (!$this->search) {
            # code...
            $testimonials = Testimonial::latest()->paginate(10);
        } else {
            # code...
            $testimonials = Testimonial::latest()->where('name','like','%'.$this->search.'%')->orWhere('profession', 'like','%'.$this->search.'%')->orWhere('status', 'like','%'.$this->search.'%')->orWhere('created_at', 'like','%'.$this->search.'%')->paginate($this->pagination);
        }
        
        return view('livewire.admin.testimonial.admin-testimonial', compact('testimonials'))->layout('layouts.admin-app')->layoutData([
            'title' => 'Testimonial || MENo~MEN'
        ]);
    }

public function updatedSearch(){
    $this->resetPage();
}
    
    public function delete(Testimonial $testimonial){
        $testimonial  = $testimonial;
        $testimonial->delete();
        Storage::delete($testimonial->image);
        $testimonial->delete();
        session()->flash('success', 'Testimonial Successfully Deleted');
        return $this->redirect(route('admin_testimonial'), navigate:true);
    }
}