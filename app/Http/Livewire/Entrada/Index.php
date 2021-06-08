<?php

namespace App\Http\Livewire\Entrada;

use Livewire\Component;
use App\Models\Entrada;

class Index extends Component
{

        public function render()
        {
            return view('livewire.entrada.index', [
                'entradas' =>  Entrada::all()
            ]);
        }
    

}
