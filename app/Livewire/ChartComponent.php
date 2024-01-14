<?php

namespace App\Livewire;

use Livewire\Component;

class ChartComponent extends Component
{

    public $subscriptions= [
['Day'=>'Mon', 'Value'=>10],
['Day'=>'Tue', 'Value'=>14],
['Day'=>'Wed', 'Value'=>18],
['Day'=>'Thu', 'Value'=>20],
['Day'=>'Fri', 'Value'=>30],
['Day'=>'Sat', 'Value'=>5],
['Day'=>'Sun', 'Value'=>11],
    ];


    public function render()
    {
        return view('livewire.chart-component')->layout('layouts.stripe-app');
    }
}
