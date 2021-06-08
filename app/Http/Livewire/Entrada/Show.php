<?php

namespace App\Http\Livewire\Entrada;
use  App\Models\Entrada;


use Livewire\Component;

class Show extends Component
{

    public $entrada;
    function mount(Entrada $entrada)
    {
        $this->entrada = $entrada;
    }

    public function render()
    {
        return view('livewire.entrada.show');
    }
}


