
<div>
    <div class="row">
        @foreach($entradas as $entrada )
        <div class= "col-sm-4 mb-2">
            <div class="card" style="width:18rem;">
                <a href="{{route('Entradas.show',['entrada' => $entrada->url]) }}">
                <img class = "card-img-top" src="{{asset('public/'.$entrada->thumbnail)}}" alt="Card image cap">
                </a>
                <div class = "card-body">
                    <h5 class ="card-title font-weight-bold">
                    {{$entrada->descripcion}}                     
                   </h5>
                    <input type ='button' class="btn btn-warning"  value = 'Ver' onclick="location.href = 'entradas/'+'{{$entrada->url}}'"/>


                </div>
            </div>
        </div>
            
        @endforeach
    </div>
</div>


