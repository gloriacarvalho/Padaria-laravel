<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function bakery()
    {
        return view('bakery');
    }

    public function sobre()
    {
        return view('sobre');
    }
    public function contato()
    {
        // apenas exibe o formulário
        return view('contato');
    }

    public function enviarContato(Request $request)
    {
        // validação simples
        $dados = $request->validate([
            'nome' => 'required|string|min:2',
            'email' => 'required|email',
            'telefone' => 'required|string',
        ]);

        // envia os dados para a view
        return view('enviarcontato', $dados);
    }
}


