@extends('layout/plantilla')

@section('tituloPagina', 'Cafeteria')

@section('contenido')
<h1>comprar Producto</h1>
<div class="row">

@foreach($p as $row)
<div class="col-md-4 col-lg-4" >
    <form action="{{ route('vender.update', $row->id)}}" method="POST">
        @csrf
        @method("PUT")
<div class="card" style="width: 18rem;">
    <img src="{{asset('svg/producto.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$row->nombre}}</h5>
        <p class="card-text">{{$row->referencia}}</p>
        <p class="card-text">Precio: {{$row->precio}}</p>
        <p class="card-text">Peso: {{$row->peso}}</p>
        <p class="card-text">Categoria: {{$row->categoria}}</p>
        <p class="card-text">Cantidad: {{$row->stock}}</p>
        @if ($row->stock > 0)
        <button class="btn btn-primary">Comprar</button>
        @else
        <div class="alert alert-danger" role="alert">
            Agotado
        </div>
        @endif
    </div>
</div>
    </form>
</div>

@endforeach
</div>
@endsection
