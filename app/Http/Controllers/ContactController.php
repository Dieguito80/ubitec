<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::send([], [], function ($message) use ($data) {
            $message->to('tuemail@dominio.com')
                    ->subject('Nuevo mensaje de contacto')
                    ->setBody(
                        "Nombre: {$data['name']}\nEmail: {$data['email']}\nMensaje:\n{$data['message']}",
                        'text/plain'
                    );
        });

        return back()->with('success', '¡Mensaje enviado correctamente!');
    }
}
