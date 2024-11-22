<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Admin::create([
            'nome' => 'Mario Rossi',
            'email' => 'mario.rossi@example.com',
            'password' => bcrypt('password123'),
        ]);
    }
}
