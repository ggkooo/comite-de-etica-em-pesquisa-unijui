<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Mostra a página de contato com o formulário
     */
    public function index()
    {
        return view('contato');
    }

    /**
     * Processa o envio do formulário de contato
     */
    public function enviar(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|string'
        ]);

        // Aqui você pode implementar o envio do e-mail ou salvar no banco de dados
        // Para este exemplo, apenas redirecionamos com uma mensagem de sucesso

        return redirect()->route('contato')->with('mensagem', 'Sua mensagem foi enviada com sucesso!');
    }
}