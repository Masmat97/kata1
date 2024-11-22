<?php
namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Operatore;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Controlla se l'utente è autenticato
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Devi essere autenticato per accedere a questa pagina.');
        }

        // Controlla se l'utente è un admin direttamente qui
        $user = Auth::user();
        if ($user->role !== 'admin') { // Supponendo che 'admin' sia il valore per gli amministratori
            return redirect()->route('home')->with('error', 'Accesso negato.'); // Reindirizza se non è un admin
        }

        // Se l'utente è autenticato e un admin, continua a ottenere i dati
        $tickets = Ticket::all();
        $operators = Operatore::all();
        $categories = Categoria::all();

        return view('admin.dashboard', compact('tickets', 'operators', 'categories'));
    }
}

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Assicurati che la vista 'home' esista
    }
}