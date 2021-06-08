<div>
    <h2 class="text-center">Agregar nueva entrada al blog</h2>


    <div class = "row justify-content-center">
        <div class="col-sm-6">
            <form wire:submit.prevent = "save">
            
                <label>Titulo</label>
                <input type="text" wire:model="titulo" class="form-control mb-2">
                @error('titulo') <p class = "error mb-2">{{$message}}</p>@enderror

                            
                <label>Descripcion</label>
                <textarea cols="20" rows="5" wire:model="descripcion" class="form-control mb-2"></textarea>
                @error('descripcion') <p class = "error mb-2">{{$message}}</p>@enderror

                <label>Autor</label>
                <input type="text" wire:model="autor" class="form-control mb-2">
                @error('autor') <p class = "error mb-2">{{$message}}</p>@enderror

                <label>Imagen</label>
                <input type="file" wire:model="thumbnail" class="form-control mb-2">
                @error('thumbnail') <p class = "error mb-2">{{$message}}</p>@enderror

                @if($thumbnail)
                    <img src ="{{$thumbnail->temporaryUrl()}}" class = "img-fluid mb-2">

                @endif

                <button type="submit" class = "btn btn-outline-primary btn-block">Guardar entrada</button>
            
            </form>
        </div>
    </div>
    
</div>
