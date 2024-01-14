<?php

namespace App\Livewire\Admin\Testimonial;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminTestimonialCreate extends Component
{
    public $name,$content, $profession,$status, $image;
    use WithFileUploads;

    public function render()
    {
        return view('livewire.admin.testimonial.admin-testimonial-create')->layout('layouts.admin-app')->layoutData([
            'title' => 'Testimonial || MENo~MEN'
        ]);
    }



    public function store(){
        $validated = $this->validate([
           'name' => 'required', 
           'profession' => 'required', 
           'content' => 'required', 
           'image' => 'required', 
           'status' => 'required', 
        ]);
// if($this->image){
$image = $this->image->store('public/testimonials');
// }
        $testimonial = Testimonial::create([
'name' => $this->name,
'profession' => $this->profession,
'content' => $this->content,
'status' => $this->status,
'image' => $image,
        ]);
        $this->reset();
        session()->flash('success', 'Testimonial Successfully created');
      return $this->redirect(route('admin_testimonial'), navigate:true);
    }

    
    
}