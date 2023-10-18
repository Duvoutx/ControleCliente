<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        return view('listaClientes', ['clientes' => $clientes]);
    }

    public function create()
    {
        return view('criaCliente');
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes-index');
    }

    public function edit($id)
    {
        $clientes = Cliente::where('id', $id)->first();
        return view('editaCliente', ['clientes' => $clientes]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'telefone' => $request->telefone
        ];
        Cliente::where('id', $id)->update($data);
        return redirect()->route('clientes-index');
    }

    public function destroy($id)
    {
        Cliente::where('id', $id)->delete();
        return redirect()->route('clientes-index');
    }

}