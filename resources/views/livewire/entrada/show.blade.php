<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="row mt-4">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body text-center">
                    <h2>{{ $entrada->titulo }}</h2>
                
                    <img src="{{ asset('public/' . $entrada->thumbnail) }}" class="img-fluid">
                </div>
                    <h5 class="mt-4">{{ $entrada->descripcion }}</h5>
                    <p class="mt-2">Autor : {{ $entrada->autor }}</p>
               
            </div>
        </div>
  
    </div>
</div>

