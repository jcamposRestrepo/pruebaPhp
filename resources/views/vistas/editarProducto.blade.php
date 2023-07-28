@extends('layout/plantilla')

@section('tituloPagina', 'CrearProducto')

@section('contenido')
<h1>editar</h1>

<div class="card">
    <form action="{{ route('productos.update', $p->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-12">
                <label for="">Nombre Producto</label>
                <input type="text" name="nombre" class="form-control" required value="{{$p->nombre}}">
            </div>
            <div class="col-6"><label for="">Referencia</label>
                <input type="text" name="referencia" class="form-control" required value="{{$p->referencia}}"></div>
            <div class="col-6">
                <label for="">Precio</label>
                <input type="text" name="precio" class="form-control" required value="{{$p->precio}}">
            </div>
            <div class="col-6">
                <label for="">peso</label>
                <input type="text" name="peso" class="form-control" required value="{{$p->peso}}">
            </div>
            <div class="col-6">
                <label for="">categoria</label>
                <input type="text" name="categoria" class="form-control" required value="{{$p->categoria}}"></div>
            <div class="col-6">
                <label for="">stock</label>
                <input type="text" name="stock" class="form-control" required value="{{$p->stock}}">
            </div>
        <div class="col-6 mt-4">
            <button class="btn btn-primary">editar</button>
            <a href="{{route('productos.index')}}" class="btn btn-danger"> Cancelar</a>
        </div>
    </div>









    </form>
</div>
@endsection
