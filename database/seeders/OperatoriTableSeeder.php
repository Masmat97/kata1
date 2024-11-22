<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Operatore;
class OperatoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('operatori')->insert([
            [
                'nome' => 'Marco Fabbri',
                'email' => 'marco.fabbri@example.com',
                'telefono' => '1234567890',
                'stato' => 1, // Stato attivo
            ],
            [
                'nome' => 'Anna Russo',
                'email' => 'anna.russo@example.com',
                'telefono' => '0987654321',
                'stato' => 1, // Stato attivo
            ],
            [
                'nome' => 'Paolo Neri',
                'email' => 'paolo.neri@example.com',
                'telefono' => '1122334455',
                'stato' => 0, // Stato inattivo
            ],
        ]);
    }
}
