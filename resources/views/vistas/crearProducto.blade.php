@extends('layout/plantilla')

@section('tituloPagina', 'CrearProducto')

@section('contenido')
<div class="card">
    <form action="{{ route('productos.store')}}" method="POST">
        @csrf
        <h1>Crear Producto</h1>
        <div class="row">
            <div class="col-12">
                <label for="">Nombre Producto</label>
                <input type="text" name="nombre" class="form-control" required />
            </div>
            <div class="col-6">
                <label for="">Referencia</label>
                <input type="text" name="referencia" class="form-control" required>
            </div>
            <div class="col-6">
                <label for="">Precio</label>
                <input type="text" name="precio" class="form-control" required>
            </div>
            <div class="col-6">
                <label for="">peso</label>
                <input type="text" name="peso" class="form-control" required>
            </div>
            <div class="col-6">
                <label for="">categoria</label>
                <input type="text" name="categoria" class="form-control" required>
            </div>
            <div class="col-6">
                <label for="">stock</label>
                <input type="text" name="stock" class="form-control" required>
            </div>
            <div class="col-6 mt-4">
                <button class="btn btn-primary">Agregar</button>
                <a href="{{route('productos.index')}}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>


    </form>
</div>
@endsection
