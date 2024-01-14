<?php

namespace App\Livewire\Admin\Testimonial;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminTestimonialEdit extends Component
{

    use WithFileUploads;
    public $name,$content, $profession,$status, $new_image, $old_image, $testimonial;

    public function render()
    {
        return view('livewire.admin.testimonial.admin-testimonial-edit')->layout('layouts.admin-app')->layoutData([
            'title' => 'Testimonial || MENo~MEN'
        ]);
    }


    public function mount(Testimonial $testimonial){
        $this->testimonial = $testimonial;
        $this->name = $testimonial->name;
        $this->profession = $testimonial->profession;
        $this->status = $testimonial->status;
        $this->content = $testimonial->content;
        $this->old_image = $testimonial->image;
    }

    public function store(){
        if($this->new_image){
            
            $validated = $this->validate([
               'name' => 'required', 
               'profession' => 'required', 
               'content' => 'required', 
               'new_image' => 'mimes:jpg,png|max:1020', 
               'status' => 'required', 
            ]);
        }

       $image = $this->testimonial->image;
       if($this->new_image){
        Storage::delete($this->old_image);

           $image = $this->new_image->store('public/testimonials');
       }

        $this->testimonial->update([
'name' => $this->name,
'profession' => $this->profession,
'content' => $this->content,
'status' => $this->status,
'image' => $image,
        ]);
        $this->reset();
        session()->flash('success', 'Testimonial Successfully Updated');
      return $this->redirect(route('admin_testimonial'), navigate:true);
    }

}