<?php

namespace App\Livewire\Frontend;

use App\Models\Testimonial as ModelsTestimonial;
use Livewire\Component;

class Testimonial extends Component
{
    public $testimonial = [];
    
    public function render()
    {
        return view('livewire.frontend.testimonial')->layout('layouts.frontend-app')->layoutData([
            'title' => 'Testimonial || MENo~MEN',
        ]);
    }

    public function mount(){
        $this->testimonial = ModelsTestimonial::latest()->where('status', 'Active')->get();
    }
}