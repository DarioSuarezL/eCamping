<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nombre' => 'Tiendas de campaña',
        ]);

        Category::create([
            'nombre' => 'Sacos de dormir',
        ]);

        Category::create([
            'nombre' => 'Colchonetas y almohadas',
        ]);

        Category::create([
            'nombre' => 'Cocinas y estufas de campamento',
        ]);

        Category::create([
            'nombre' => 'Iluminación',
        ]);

        Category::create([
            'nombre' => 'Equipo de senderismo',
        ]);

        Category::create([
            'nombre' => 'Equipo de supervivencia',
        ]);

        Category::create([
            'nombre' => 'Accesorios para acampar',
        ]);
    }
}
