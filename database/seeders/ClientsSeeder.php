<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dario = User::create([
            'name' => 'Dario',
            'email' => 'dario1@correo.com',
            'password' => bcrypt('12345678'),
        ]);
        
        Cliente::create([
            'user_id' => $dario->id,
            'genero' => 'M',
            'telefono' => '12345678',
            'direccion' => 'Calle 1',
        ]);
    }
}
