<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventosFormRequest;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index(Request $request)
    {
        $eventos = Evento::all();
        $mensagemSucesso = session('mensagem.sucesso');
        //$request->session()->forget('mensagem.sucesso');

        return view('eventos.index')->with('eventos', $eventos)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(EventosFormRequest $request)
    {

        $eventoData = $request->all();

        $eventoData['cliente_id'] = $request->cliente_id; // Supondo que o campo cliente_id seja enviado no formulário

        $evento = Evento::create($eventoData); // Vem todos os parametros do formulário

        return to_route('eventos.index')
            ->with('mensagem.sucesso', "Evento '{$evento->nome}' adicionado com sucesso"); // Sempre redirecionar para quando atualizar não enviar novamente os dados.
    }

    public function destroy(Evento $evento)
    {
        $evento->delete();
        //$request->session()->flash();

        return to_route('eventos.index')
            ->with('mensagem.sucesso', "Evento '{$evento->nome}' removido com sucesso");
    }

    public function edit(Evento $evento)
    {
        //dd($cliente->eventos); // É possível pegar apenas eventos específicos
        return view('eventos.edit')->with('evento', $evento);
    }

    public function update(Evento $evento, EventosFormRequest $request)
    {
        $evento->fill($request->all()); // Todos os atributos
        $evento->save();

        return to_route('eventos.index')
            ->with('mensagem.sucesso', "Evento '{$evento->nome}' atualizado com sucesso");
    }
}
