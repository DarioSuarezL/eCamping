<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShowProducts extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.show-products',[
            'products' => $products
        ]);
    }
}