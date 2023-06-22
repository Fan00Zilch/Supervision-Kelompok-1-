<?php

namespace App\Http\Livewire\Supervision\Fold;

use Livewire\Component;
use App\Models\supervision\Tabels;

class Tabel extends Component
{
    public function render()
    {
        $Fold1 = Tabels::paginate(1);
        return view('livewire.supervision.fold.tabel', compact('Fold1'));
    }
}
