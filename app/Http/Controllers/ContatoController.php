<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        // Validação do formulário
        $request->validate([
            'nomecompleto' => 'required|string|max:255',
            'telefone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|string|max:500',
        ]);

        // Processar os dados (aqui você pode enviar um email, salvar no banco de dados, etc.)
        $dados = $request->all();

        // Exemplo: enviar um email (substitua com sua lógica)
        Mail::send([], [], function ($message) use ($dados) {
            $message->to('dbleall@gmail.com')
                    ->subject('Nova mensagem de contato')
                    ->setBody('Nome: ' . $dados['nomecompleto'] . '<br>Telefone: ' . $dados['telefone'] . '<br>Email: ' . $dados['email'] . '<br>Mensagem: ' . $dados['mensagem'], 'text/html');
        });

        // Redirecionar de volta com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
