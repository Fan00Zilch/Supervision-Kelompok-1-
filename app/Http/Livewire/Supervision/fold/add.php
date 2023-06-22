<?php

namespace App\Http\Livewire\Supervision\fold;

use Livewire\Component;

class Add extends Component
{
    public $title, $body;
    public function render()
    {
        return view('livewire.supervision.fold.add');
    }

    public function save(){
        dd($this->title, $this->body);
    }
}