<?php

namespace App\Http\Livewire\Supervision\fold;

use Livewire\Component;

class Idx extends Component
{
    public $Fold1 = false;
    
    protected $listeners = ['Fold_Disable'];
    public function render()
    {
        return view('livewire.supervision.fold.idx');
    }

    public function Fold_Enable(){
        $this->Fold1 = true;
    }


    public function Fold_Disable(){
        $this->Fold1 = false;

    }

    
}