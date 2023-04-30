<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dario = User::create([
            'name' => 'Dario',
            'email' => 'dario@correo.com',
            'password' => bcrypt('12345678'),
            'role' => 0,
        ]);
    }
}
