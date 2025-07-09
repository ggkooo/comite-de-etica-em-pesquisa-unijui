<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Mostra a p�gina de contato com o formul�rio
     */
    public function index()
    {
        return view('contato');
    }

    /**
     * Processa o envio do formul�rio de contato
     */
    public function enviar(Request $request)
    {
        // Valida��o dos dados do formul�rio
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|string'
        ]);

        // Aqui voc� pode implementar o envio do e-mail ou salvar no banco de dados
        // Para este exemplo, apenas redirecionamos com uma mensagem de sucesso

        return redirect()->route('contato')->with('mensagem', 'Sua mensagem foi enviada com sucesso!');
    }
}