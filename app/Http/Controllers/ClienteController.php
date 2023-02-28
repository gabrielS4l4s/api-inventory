<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller{
    public function index(){
        return Cliente::all();
    }

    public function show($id){
        return Cliente::find($id);
    }

    public function store(Request $request){
        return Cliente::create($request->all());
    }

    public function update(Request $request, $id){
        $cliente = Cliente::where('id', $id)->update($request->all());

        return $cliente;
    }

    public function delete($id){
        return Cliente::where('id', $id)->delete();
    }
}
