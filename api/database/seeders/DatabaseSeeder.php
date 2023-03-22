<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Filipi',
            'email' => 'filipi@teste.com.br',
            'password' => bcrypt( 'senhafilipi' ),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\User::create([
            'name' => 'Caio',
            'email' => 'caio@teste.com.br',
            'password' => bcrypt( 'senhacaio' ),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\User::create([
            'name' => 'Bianca',
            'email' => 'bianca@teste.com.br',
            'password' => bcrypt( 'senhabianca' ),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
