<?php

namespace App\Http\Livewire\Supervision\fold;

use Livewire\Component;


class tombol_unfold extends Component
{
    public $tombolA = false; 
    protected $listeners = ['tombol_Disable'];
    public function render()
    {
        return view('livewire.supervision.fold.tombol_unfold');
    }
    
    public function tombol_Enable(){
        $this->tombolA = true;
    }

    public function tombol_Disable(){
        $this->tombolA = false;
    }
}
