@extends('layout/plantilla')

@section('tituloPagina', 'CrearProducto')

@section('contenido')
<div class="card">
    <h1>Eliminar</h1>
    <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">¿estas seguro de eliminar este producto?
            <table class="table table-striped danger" id="tContrato">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Precio</th>
                    <th scope="col">peso</th>
                    <th scope="col">categoria</th>
                    <th scope="col">Stock</th>

                </thead>
                <tbody>
                <tr>

                    <td>{{$p->nombre}}</td>
                    <td>{{$p->referencia}}</td>
                    <td>{{$p->precio}}</td>
                    <td>{{$p->peso}}</td>
                    <td>{{$p->categoria}}</td>
                    <td>{{$p->stock}}</td>

                </tr>


                </tbody>
            </table>
            <hr>
            <form action="{{ route('productos.destroy', $p->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
                <a href="{{route('productos.index')}}" class="btn btn-primary"> Cancelar</a>
            </form>
        </div>
        </p>
    </div>
</div>
@endsection
