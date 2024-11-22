<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorie')->insert([
            [
                'nome' => 'Tecnico',
                'descrizione' => 'Problemi tecnici legati all\'utilizzo della piattaforma.',
            ],
            [
                'nome' => 'Contabilità',
                'descrizione' => 'Richieste relative a pagamenti e fatturazione.',
            ],
            [
                'nome' => 'Supporto generale',
                'descrizione' => 'Richieste generali di assistenza.',
            ],
        ]);
    }
}
