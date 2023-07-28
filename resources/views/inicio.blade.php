@extends('layout/plantilla')

@section('tituloPagina', 'Cafeteria')

@section('contenido')
<div class="container">

    <div>
        @if ($mensaje = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $mensaje}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    </div>
    <h1>Productos</h1>
    <a href="{{Route('productos.create')}}"><button class="btn btn-primary">Crear Producto</button></a>

    <table class="table table-striped danger" id="tContrato">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Referencia</th>
            <th scope="col">Precio</th>
            <th scope="col">peso</th>
            <th scope="col">categoria</th>
            <th scope="col">Stock</th>
            <th scope="col">Accion</th>

        </thead>
        <tbody>
        @foreach($producto as $row)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$row->nombre}}</td>
            <td>{{$row->referencia}}</td>
            <td>{{$row->precio}}</td>
            <td>{{$row->peso}}</td>
            <td>{{$row->categoria}}</td>
            <td style="width: 10%">{{$row->stock}}</td>
            <td>
                <div class="row">
                    <div class="col"> <form action="{{ route("productos.edit", $row->id)}}" method="GET">
                        <button class="border-0">
                            <img src="{{asset('svg/editar.png')}}" width="40px;">
                        </button>
                        </form></div>
                    <div class="col"><form action="{{ route("productos.show", $row->id)}}" method="GET">
                        <button class="border-0">
                            <img src="{{asset('svg/delete.svg')}}" width="40px;">
                        </button>
                        </form></div>
                </div>


            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        {{$producto->links()}}
    </div>


</div>
@endsection
