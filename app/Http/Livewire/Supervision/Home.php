<?php

namespace App\Http\Livewire\Supervision;

use Livewire\Component;
use App\Models\supervision\Tabels;
use App\Models\supervision\student;

class Home extends Component
{
    public function render()
    {
        $Fold1 = Tabels::paginate(1);
        return view('livewire.supervision.home', compact('Fold1')) -> layout ('adminlte::page');
    }
}
