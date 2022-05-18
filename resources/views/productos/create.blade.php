@extends('layout.principal')

@section('contenido')
<div class="row">
  <h1 class="light-blue-text text-darken-4"> Nuevo Producto </h1>
</div>

<div class="row">
    <form class="col s12" method="POST"
    action="{{ route('productos.store')}}">

    @csrf
    @if(session('mensaje'))
    <div class="row">
        <div class="col s8">
            <span class="pink-text text-darken-1">
                {{session('mensaje')}}
             </span>
        </div>

    </div>

    @endif
      <div class="row">
        <div class="input-field col s8">
          <input placeholder="Nombre del Producto" id="nombre" type="text" class="validate" name="nombre">
          <label for="first_name">Nombre de Producto</label>
          <span>{{$errors->first('nombre')}}</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <textarea id="desc" class="materialize-textarea" name="desc"></textarea>
        <label for="desc">Descripción</label>
        <span>{{$errors->first('desc')}}</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s18">
          <input id="precio" type="number" class="validate" name="precio">
          <label for="precio">Precio</label>
          <span>{{$errors->first('precio')}}</span>
        </div>
      </div>
      <div class="row">
      <div class="file-field input-field col s8">
      <div class="btn light-blue darken-4">
        <span>Imagen de Producto...</span>
        <input type="file" name="imagen">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
      </div>

      <div class="row">
      <div class="input-field col s8">
      <select name="categoria">
      <option value="" disabled selected>Elija Categoria</option>
      @foreach($categorias as $categoria)
      <option value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
      @endforeach
    </select>
    <label>Categorias Disponibles</label>
    <span>{{$errors->first('categoria')}}</span>

      </div>
     </div>
     <div class="row">
      <div class="input-field col s8">
      <select name="marca">
      <option value="" disabled selected>Elija Marca</option>
      @foreach($marcas as $marca)
      <option value="{{ $marca->id }}">{{ $marca->nombre}}</option>
      @endforeach
    </select>
    <label>Marca Disponibles</label>
    <span>{{$errors->first('marca')}}</span>

      </div>
     </div>
      <div class="row">
      <button class="btn waves-effect waves-light light-blue darken-4" type="submit">Guardar
      </button>
      </div>
    </form>
  </div>
  @endsection
