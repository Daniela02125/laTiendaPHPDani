@extends('layouts.principal')

@section('contenido')
<div class="row">
    <h1>Carrito de compras</h1>
</div>

@if(!session('cart'))
<div class="row">
    <p>No hay productos en el carrito</p>
</div>
@else
<div class="row">
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>

            </tr>
        </thead>
        <tbody>
            @foreach(session('cart') as $index => $prod)
            <tr>
                <td>{{ $prod[0]['nombre_prod'] }}</td>
                <td>{{ $prod[0]['cantidad'] }}</td>
                <td>{{ $prod[0]['precio'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="row">
    <form action="{{route('cart.destroy' , 1)}}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn waves-effect waves-light red darken-1" type="submit">
            Eliminar carrito
        </button>
    </form>
</div>
@endif
@endsection