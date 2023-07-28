<?php

namespace App\Http\Controllers;

use App\Models\Contrato as C;
use App\Models\Producto;
use App\Models\Productos AS PR;
use App\Models\Representante as R;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use App\Models\Producto AS P;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $p = PR::orderBy('id', 'desc')->paginate(5);
        return view('inicio',['producto'=> $p]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vistas.crearProducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fechaActual = now();
        $Producto = new PR;
        $Producto->nombre = $request->post('nombre');
        $Producto->referencia = $request->post('referencia');
        $Producto->precio = $request->post('precio');
        $Producto->peso = $request->post('peso');
        $Producto->categoria = $request->post('categoria');
        $Producto->stock = $request->post('stock');
        $Producto->fechaCreacion = $fechaActual;
        $Producto->save();

        return redirect()->route("productos.index")->with("success", "Agregado con Exito");
    }

    /**
     * Display the specified resource.
     */
    public function show( $ID)
    {
        $p = PR::find($ID);

        return view('vistas.eliminarProducto', compact('p'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $ID)
    {
       // $datos = "facultad";
       // return view('welcome', compact('datos'));

        $p = PR::find($ID);
        return view('vistas.editarProducto', compact('p'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $ID)
    {
        $fechaActual = now();

        $p = PR::find($ID);
        $p->nombre = $request->post('nombre');
        $p->referencia = $request->post('referencia');
        $p->precio = $request->post('precio');
        $p->peso = $request->post('peso');
        $p->categoria = $request->post('categoria');
        $p->stock = $request->post('stock');
        $p->fechaCreacion = $fechaActual;
        $p->save();

        return redirect()->route("productos.index")->with("success", "Actualizado con Exito");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $ID)
    {
        $p = PR::find($ID);
        $p ->delete();
        return redirect()->route("productos.index")->with("success", "Eliminado con Exito");

    }
}
