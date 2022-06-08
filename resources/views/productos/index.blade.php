@extends('layout.principal')
@section('contenido')

<div class="container">
<div class="row">
    <h1 class="deep-purple-text text-darken-2"> Catalagos de Productos</h1>
</div>

<div class="row">
@foreach($productos as $producto)
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image" width="100px" height="100px">
        <img src="{{asset('img/'.$producto->imagen)}}" max-width="100%" max-height="100%">
        <span class="card-title" >{{$producto->nombre}}</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons"></i></a>
        </div>
        <div class="card-content">
        
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>
@endsection

