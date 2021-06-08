<?php

namespace App\Http\Livewire\Entrada;
use App\Models\Entrada;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $titulo , $autor , $descripcion , $thumbnail;

    public function save(){
        //dd($this->name);
        $validate = $this->validate([ 
            'titulo' => 'required' ,
            'autor' => 'required' , 
            'descripcion'  => 'required', 
            'thumbnail' => 'image|max:1024', 
        ]);

        $validate['thumbnail'] = $this->thumbnail->store('photos');
        $entrada = Entrada::create($validate);
        return redirect('/');
       // dd($product);
    }
    public function render()
    {
        return view('livewire.entrada.create');
    }
}

