<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventosFormRequest;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $eventos = Evento::where('nome', 'like', "%$search%")->get();
        $mensagemSucesso = session('mensagem.sucesso');
        //$request->session()->forget('mensagem.sucesso');

        return view('eventos.index', [
            'eventos' => $eventos,
            'search' => $search,
            'mensagemSucesso' => $mensagemSucesso,
        ]);
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(EventosFormRequest $request)
    {
        $evento = Evento::create($request->all());

        return to_route('eventos.index')
            ->with('mensagem.sucesso', "Evento '{$evento->nome}' adicionado com sucesso");
    }

    public function destroy(Evento $evento)
    {
        $evento->delete();

        return to_route('eventos.index')
            ->with('mensagem.sucesso', "Evento '{$evento->nome}' removido com sucesso");
    }

    public function edit(Evento $evento)
    {
        return view('eventos.edit')->with('evento', $evento);
    }

    public function update(Evento $evento, EventosFormRequest $request)
    {
        $evento->fill($request->all());
        $evento->save();

        return to_route('eventos.index')
            ->with('mensagem.sucesso', "Evento '{$evento->nome}' atualizado com sucesso");
    }
}
