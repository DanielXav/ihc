<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(Request $request)
    {
        $clientes = Cliente::all();
        $mensagemSucesso = session('mensagem.sucesso');
        //$request->session()->forget('mensagem.sucesso');

        return view('clientes.index')->with('clientes', $clientes)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'nome' => ['required', 'min:3 ']
        ]);

        $cliente = Cliente::create($request->all()); // Vem todos os parametros do formulário

        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente '{$cliente->nome}' adicionado com sucesso"); // Sempre redirecionar para quando atualizar não enviar novamente os dados.
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        //$request->session()->flash();

        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente '{$cliente->nome}' removido com sucesso");
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit')->with('cliente', $cliente);
    }

    public function update(Cliente $cliente, Request $request)
    {
        $cliente->fill($request->all()); // Todos os atributos
        $cliente->save();

        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente '{$cliente->nome}' atualizado com sucesso");
    }

}
