<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CreateProduct extends Component
{

    public $nombre, $descripcion, $precio, $categoria_id, $imagen, $stock;

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required',
        'categoria_id' => 'required',
        'imagen' => 'required',
        'stock' => 'required',
    ];

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-product', [
            'categories' => $categories
        ]);
    }
}
