<?php

namespace App\Http\Livewire\Supervision\Fold;

use Livewire\Component;
use App\Models\supervision\student;

class Tabel extends Component
{
    public function render()
    {
        $Fold2 = student::paginate(1);
        return view('livewire.supervision.fold.tabel', compact('Fold2'));
    }
}
