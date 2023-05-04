<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(['nombre' => 'Coleman']);
        Brand::create(['nombre' => 'The North Face']);
        Brand::create(['nombre' => 'Marmot']);
        Brand::create(['nombre' => 'REI']);
        Brand::create(['nombre' => 'Patagonia']);
        Brand::create(['nombre' => 'Big Agnes']);
        Brand::create(['nombre' => 'Columbia Sportswear']);
        Brand::create(['nombre' => 'Eureka']);
        Brand::create(['nombre' => 'Kelty']);
        Brand::create(['nombre' => 'Puma']);
        Brand::create(['nombre' => 'Adidas']);
        Brand::create(['nombre' => 'Nike']);
        Brand::create(['nombre' => 'Fila']);
    }
}
