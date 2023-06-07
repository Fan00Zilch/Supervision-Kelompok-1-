<?php

namespace App\Http\Livewire\Plt\Announcement;

use Livewire\Component;

class Idx extends Component
{
    public $addAnnouncement = false;
    protected $listeners = ['addAnnouncement_Disable'];
    public function render()
    {
        return view('livewire.plt.announcement.idx');
    }

    public function addAnnouncement_Enable(){
        $this->addAnnouncement = true;
    }

    public function addAnnouncement_Disable(){
        $this->addAnnouncement = false;

    }
}