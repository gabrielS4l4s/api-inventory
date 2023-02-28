<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index()
    {
        return Proveedores::all();
    }

    public function show($id)
    {
        return Proveedores::find($id);
    }

    public function store(Request $request)
    {
        return Proveedores::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $proveedor = Proveedores::where('id', $id)->update($request->all());

        return $proveedor;
    }

    public function delete($id)
    {
        return Proveedores::where('id', $id)->delete();
    }
}
