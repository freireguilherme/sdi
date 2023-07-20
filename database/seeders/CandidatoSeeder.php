<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Candidato::create([
            'name' => 'Joao',
            'username' => 'candidato',
            'email' => 'candidato@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
