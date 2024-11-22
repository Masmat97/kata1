<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;
use App\Models\Categoria;
class TicketsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tickets')->insert([
            [
                'titolo' => 'Problema login',
                'descrizione' => 'Non riesco a entrare nell\'account.',
                'stato' => 0, // 0 = Aperto
                'data_creazione' => now(),
                'data_chiusura' => null,
                'operatore_id' => 1, // Associa l'operatore con ID 1
            ],
            [
                'titolo' => 'Errore nel pagamento',
                'descrizione' => 'Il pagamento è stato rifiutato nonostante i fondi sufficienti.',
                'stato' => 1, // 1 = In corso
                'data_creazione' => now(),
                'data_chiusura' => null,
                'operatore_id' => 2, // Associa l'operatore con ID 2
            ],
            [
                'titolo' => 'Richiesta di supporto',
                'descrizione' => 'Ho bisogno di aiuto per configurare il mio account.',
                'stato' => 2, // 2 = Chiuso
                'data_creazione' => now(),
                'data_chiusura' => now(),
                'operatore_id' => 3, // Associa l'operatore con ID 3
            ],
        ]);
    }
}
