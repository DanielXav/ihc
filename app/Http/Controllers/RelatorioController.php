<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function index()
    {
        $dados = [
            ['coluna1' => 'Dado 1', 'coluna2' => 'Dado A'],
            ['coluna1' => 'Dado 2', 'coluna2' => 'Dado B'],
            ['coluna1' => 'Dado 3', 'coluna2' => 'Dado C'],
        ];

        return view('relatorio.index', ['dados' => $dados]);
    }
}
