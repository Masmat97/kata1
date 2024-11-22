<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;




class RegisterController extends Controller
{
    use RegistersUsers;
    public function showRegistrationForm()
    {
        return view('auth.register'); // Assicurati che questa vista esista
    }

    protected function registered(Request $request, $user)
    {
        Auth::login($user); // Usa Auth per effettuare il login
        return redirect()->route('dashboard'); // Reindirizza al dashboard
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], // Assicurati di avere un campo di conferma password
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']), // Crittografa la password
        ]);
    }
}