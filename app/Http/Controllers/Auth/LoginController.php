<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers, ValidatesRequests;

    public function showLoginForm()
    {
        return view('auth.login'); // Assicurati che questa vista esista
    }

    public function login(Request $request)
    {
        
        // Valida i dati del login
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) { // Usa Auth::attempt
            // Reindirizza l'utente se l'autenticazione ha successo
            return redirect()->intended('/home'); // Cambia '/home' con la tua rotta di destinazione
        }

        // Ritorna alla vista di login con un messaggio di errore
        return back()->withErrors([
            'email' => 'Le credenziali fornite non sono corrette.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Usa Auth::logout
        return redirect('/login'); // Cambia '/login' con la tua rotta di login
    }
}