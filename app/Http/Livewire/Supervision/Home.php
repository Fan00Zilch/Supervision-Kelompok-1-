<?php

namespace App\Http\Livewire\Supervision;

use Livewire\Component;
use App\Models\supervision\Tabels;

class Home extends Component
{
    public function render()
    {
        $Fold = Tabels::paginate(1);
        return view('livewire.supervision.home', compact('Fold')) -> layout ('adminlte::page');
    }
}
