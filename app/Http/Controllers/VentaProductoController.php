<?php

namespace App\Http\Controllers;

use App\Models\Productos as PR;
use App\Models\venta_producto as V;
use Illuminate\Http\Request;

class VentaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $p = PR::all();
        return view('vistas.venderProducto',['p'=> $p]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(venta_producto $venta_producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $p = PR::find($id);
        return view('vistas.venderProducto', compact('p'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fechaActual = now();
        $p = PR::find($id);
        $cantidad = $p->stock;
        $desminuir = $cantidad - 1;

        $p->nombre = $p->nombre;
        $p->referencia = $p->referencia;
        $p->precio = $p->precio;
        $p->peso = $p->peso;
        $p->categoria = $p->categoria;
        $p->stock = $desminuir;
        $p->fechaCreacion = $p->fechaCreacion;
        $p->save();


        $ventas = new V;
        $ventas->ventas = 1;
        $ventas->producto_id = $p->id;
        $ventas->save();

        return redirect()->route("productos.index")->with("success", "Actualizado con Exito");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(venta_producto $venta_producto)
    {
        //
    }
}
