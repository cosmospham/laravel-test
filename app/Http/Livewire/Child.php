<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Child extends Component
{
    public $child;

    public function render()
    {
        $this->child = rand();
        return view('livewire.child');
    }
}
