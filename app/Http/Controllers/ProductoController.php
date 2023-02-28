<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller{
    public function index(){
        return Producto::all();
    }

    public function show($id){
        return Producto::find($id);
    }

    public function store(Request $request){
        return Producto::create($request->all());
    }

    public function update(Request $request, $id){
        // $producto = Producto::findOrFail($id);
        // $producto->update($request->all());
        $producto = Producto::where('id', $id)->update($request->all());

        return $producto;
    }

    public function delete($id){
        // $producto = Producto::findOrFail($id);
        // $producto->delete();
        return Producto::where('id', $id)->delete();
        // return 204;
    }
}
