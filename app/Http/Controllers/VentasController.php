<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
        return Ventas::all();
    }

    public function show($id)
    {
        return Ventas::find($id);
    }

    public function store(Request $request)
    {
        return Ventas::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $venta = Ventas::where('id', $id)->update($request->all());

        return $venta;
    }

    public function delete($id)
    {
        return Ventas::where('id', $id)->delete();
    }
}
