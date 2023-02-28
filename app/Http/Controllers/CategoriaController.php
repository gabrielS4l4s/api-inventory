<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return Categoria::all();
    }

    public function show($id)
    {
        return Categoria::find($id);
    }

    public function store(Request $request)
    {
        return Categoria::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $categoria = Categoria::findOrFail($id);
        // $categoria->update($request->all());

        $categoria = Categoria::where('id', $id)->update($request->all());

        return $categoria;
    }

    public function delete($id)
    {
        // $categoria = Categoria::findOrFail($id);
        // $categoria->delete();

        return Categoria::where('id', $id)->delete();

        //return 204;
    }
}
