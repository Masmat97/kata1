<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TicketCategoria;
use Illuminate\Support\Facades\DB;
class TicketCategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ticket_categoria')->insert([
            [
                'ticket_id' => 1, // Associa il ticket con ID 1 alla categoria con ID 1
                'categoria_id' => 1,
            ],
            [
                'ticket_id' => 2, // Associa il ticket con ID 2 alla categoria con ID 2
                'categoria_id' => 2,
            ],
            [
                'ticket_id' => 3, // Associa il ticket con ID 3 alla categoria con ID 3
                'categoria_id' => 3,
            ],
        ]);
    }
}
