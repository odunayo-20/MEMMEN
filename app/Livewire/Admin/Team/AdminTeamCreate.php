<?php

namespace App\Livewire\Admin\Team;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminTeamCreate extends Component
{
    use WithFileUploads;
    public $facebook_link;
    public $twitter_link;
    public $instagram_link;
    public $linkedin_link;
    public $name,$profession,$status, $image;
    public function render()
    {
        return view('livewire.admin.team.admin-team-create')->layout('layouts.admin-app')->layoutData([
            'title' => 'Team || MENo~MEN'
        ]);
    }

    public function store(){
        // if(!empty($this->instagram_link) && !empty($this->facebook_link) && !empty($this->twitter_link) && !empty($this->linkedin_link)){
            
            $validated = $this->validate([
               'facebook_link' => 'url', 
               'twitter_link' => 'url', 
               'instagram_link' => 'url', 
               'linkedin_link' => 'url', 
               'name' => 'required', 
               'profession' => 'required', 
               'image' => 'required', 
               'status' => 'required', 
   
            ]);
        // }

        
// if($this->image){
$image = $this->image->store('public/teams');
// }
        $testimonial = Team::create([
'name' => $this->name,
'profession' => $this->profession,
'facebook' => $this->facebook_link,
'twitter' => $this->twitter_link,
'instagram' => $this->instagram_link,
'linkedin' => $this->linkedin_link,
'status' => $this->status,
'image' => $image,
        ]);
        $this->reset();
        session()->flash('success', 'Team Successfully created');
      return $this->redirect(route('admin_team'), navigate:true);
    }

    
    
}