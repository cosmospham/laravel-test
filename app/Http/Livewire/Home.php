<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $time;

    public function render()
    {
        $this->time = time();
        return view('livewire.home');
    }
}
