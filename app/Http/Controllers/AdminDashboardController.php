<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Operatore;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    

    public function index()
    {
        // Carica tutti i ticket, operatori e categorie per la dashboard
        $tickets = Ticket::all();
        $operators = Operatore::all();  // Lista degli operatori disponibili
        return view('admin.dashboard', compact('tickets', 'operators'));
    }

    // Metodo per aggiornare lo stato del ticket
    public function updateTicketStatus($ticketId, Request $request)
    {
        $ticket = Ticket::findOrFail($ticketId);  // Trova il ticket tramite ID
        $ticket->status = $request->status;  // Aggiorna lo stato del ticket
        $ticket->save();  // Salva i cambiamenti nel database

        return redirect()->route('admin.dashboard');  // Torna alla dashboard
    }

    // Metodo per assegnare un operatore al ticket
    public function assignTicketOperator($ticketId, $operatorId)
    {
        $ticket = Ticket::findOrFail($ticketId);  // Trova il ticket tramite ID
        $ticket->operator_id = $operatorId;  // Assegna l'operatore al ticket
        $ticket->save();  // Salva i cambiamenti nel database

        return redirect()->route('admin.dashboard');  // Torna alla dashboard
    }
}
