<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShowProducts extends Component
{
    public function render()
    {
        $products = Product::paginate(18);
        return view('livewire.show-products',[
            'products' => $products
        ]);
    }
}
