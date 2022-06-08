@extends('layouts.principal')

@section('contenido')


<div class="container">
    <div class="row">
        <div class="col s12">
            <h1 class="cyan-text text-darken-3">{{ $producto->nombre }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col s8">
            <div class="row">
                <div class="col s8">
                    <img src="{{asset('img/producto/'.$producto->imagen)}}" alt="" width="500px" height="200px">
                </div>
            </div>
            <ul>
                <li><strong>Marca:</strong> {{$producto->marca->nombre}}</li>
                <li><strong>Categoría:</strong> {{$producto->categoria->nombre}}</li>
                <li><strong>Precio:</strong> {{$producto->precio}}</li>
                <li><strong>Descripción:</strong> {{$producto->desc}}</li>
            </ul>
        </div>
    </div>

    <div class="col s4">
        <form action="{{route('cart.store')}}" method="post">
            @csrf

            <div class="row">
                <h3>Añadir al carrito</h3>
            </div>
            <input type="hidden" name="prod_id" value="{{$producto->id}}">
            <div class="row">
                <div class="col s4 input-field">
                    <select name="cantidad" id="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col s4 input-field">
                    <button type="submit" class="btn waves-effect waves-light">
                        Agregar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection