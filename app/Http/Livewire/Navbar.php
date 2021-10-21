<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{

    protected $listeners = ['reload-navbar' => '$refresh'];

    public function render()
    {
        return view('livewire.navbar');
    }
}
