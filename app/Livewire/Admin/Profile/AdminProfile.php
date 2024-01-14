<?php

namespace App\Livewire\Admin\Profile;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminProfile extends Component
{
    use WithFileUploads;

    public $name,$email,$new_image,$old_image;
    public function render()
    {
        return view('livewire.admin.profile.admin-profile')->layout('layouts.admin-app')->layoutData([
            'title' => 'Profile'
        ]);
    }


    public function mount()
    {
        $admin = Admin::findOrFail(Auth::guard('admin')->user()->id);
        // $admin = $admin;
        $this->name =  $admin->name; 
        $this->email =  $admin->email; 
        $this->old_image =  $admin->image; 
    }

    public function updateAdmin()
    {
        $admin = Admin::findOrFail(Auth::guard('admin')->user()->id);

        $admin->name = $this->name;
        $admin->email = $this->email;
        $admin->save();
        session()->flash('success', 'Profile Successfully Updated');

        return redirect(route('admin_profile'));
    }
    
    public function updateImage(){
        $admin = Admin::findOrFail(Auth::guard('admin')->user()->id);
        
        $file = $this->new_image;
        if (!is_null($this->new_image)) {
            Storage::delete($this->old_image);
            $file = $this->new_image->store('public/admin');
        }


        $admin->image = $file;
        $admin->save();
        session()->flash('success', 'Profile Image Successfully Updated');

        return redirect(route('admin_profile'));

    }

}