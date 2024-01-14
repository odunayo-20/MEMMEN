<?php

namespace App\Livewire\Admin\Team;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminTeamEdit extends Component
{
    use WithFileUploads;
    public $facebook_link;
    public $twitter_link;
    public $instagram_link;
    public $linkedin_link;
    public $team;
    public $name,$profession,$status, $new_image, $old_image;


    public function render()
    {
        return view('livewire.admin.team.admin-team-edit')->layout('layouts.admin-app')->layoutData([
            'title' => 'Team || MENo~MEN'
        ]);
    }



public function mount(Team $team){
    $this->team = $team;
    $this->name = $team->name;
    $this->status = $team->status;
    $this->old_image = $team->image;
    $this->profession = $team->profession;
    $this->facebook_link = $team->facebook;
    $this->instagram_link = $team->instagram;
    $this->twitter_link = $team->twitter;
    $this->linkedin_link = $team->linkedin;
}

    public function store(){

        if($this->new_image){
            $validated = $this->validate([
               'facebook_link' => 'url',
               'twitter_link' => 'url',
               'instagram_link' => 'url',
               'linkedin_link' => 'url',
               'name' => 'required',
               'profession' => 'required',
               'new_image' => 'required',
               'status' => 'required',

            ]);
        }


        $image = $this->team->image;
if($this->new_image){
    Storage::delete($this->old_image);

$image = $this->new_image->store('public/teams');
}
    $this->team->update([
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
        session()->flash('success', 'Team Successfully Updated');
      return $this->redirect(route('admin_team'), navigate:true);
    }

}