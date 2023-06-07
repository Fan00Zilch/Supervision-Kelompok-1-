<?php

namespace App\Http\Livewire\Plt\Announcement;

use Livewire\Component;

class Add extends Component
{
    public $title, $body;
    public function render()
    {
        return view('livewire.plt.announcement.add');
    }

    public function save(){
        dd($this->title, $this->body);
    }
}
