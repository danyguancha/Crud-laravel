<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(Request $request)
    {
        $clientes =  Cliente::query();
        if($request->has('busqueda') && $request->has('filtro')){
            $filtro = $request->input('filtro');
            $busqueda = $request->input('busqueda');
            $clientes->where($filtro, 'like', '%' . $busqueda . '%');

        }

        $clientes = $clientes->get();

        return view('clientes.index',compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(ClienteRequest $request)
    {
        Cliente::create($request->all());
        return redirect('/clientes');
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show',[
            'Cliente'=>$cliente
        ]);
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit',[
            'cliente'=>$cliente]);
    }

    public function update(ClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->all());

        return redirect('/clientes');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return back();

    }
}
