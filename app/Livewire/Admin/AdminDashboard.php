<?php

namespace App\Livewire\Admin;

use App\Models\Contact;
use App\Models\Donate;
use App\Models\Event;
use App\Models\Team;
use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;
use Coduo\PHPHumanizer\NumberHumanizer;

class AdminDashboard extends Component
{
    use WithPagination;
    public $contact,$team,$testimonial,$event,$donate;
    public $subscriptions;
    public function render()
    {

        $donates = Donate::paginate(5);
        return view('livewire.admin.admin-dashboard', compact(['donates']))->layout('layouts.admin-app')->layoutData([
            'title' => 'Dashboard || MENo~MEN'
        ]);
    }


    public function mount(){
        $this->event = Event::get();
        $this->contact = Contact::get();
        $this->team = Team::get();
        $this->testimonial = Testimonial::get();
        $this->donate = Donate::get();

        $this->subscriptions= [
            ['Day'=>'Donate', 'Value'=>count($this->donate)],
            ['Day'=>'Contact', 'Value'=>count($this->contact)],
            ['Day'=>'Event', 'Value'=>count($this->event)],
            ['Day'=>'Team', 'Value'=>count($this->team)],
            ['Day'=>'Testimonial', 'Value'=>count($this->testimonial)],
                ];
    }
}