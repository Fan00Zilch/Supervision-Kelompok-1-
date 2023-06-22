<?php

namespace App\Http\Livewire\Supervision\fold;

use Livewire\Component;

class tombol extends Component
{
    public $title, $body;
    public function render()
    {
        return view('livewire.supervision.fold.tombol');
    }

    public function save(){
        dd($this->title, $this->body);
    }
}