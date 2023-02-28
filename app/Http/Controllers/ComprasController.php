<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index()
    {
        return Compras::all();
    }

    public function show($id)
    {
        return Compras::find($id);
    }

    public function store(Request $request)
    {
        return Compras::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $compra = Compras::where('id', $id)->update($request->all());

        return $compra;
    }

    public function delete($id)
    {
        return Compras::where('id', $id)->delete();
    }
}
