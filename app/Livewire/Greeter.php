<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $name = 'Prathamesh';

    public function change($newName)
    {
        $this->name = $newName;
    }

    public function render()
    {
        return view('livewire.greeter');
    }
}
