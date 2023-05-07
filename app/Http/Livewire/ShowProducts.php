<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ShowProducts extends Component
{
    protected $listeners = ['deleteProduct'];

    public function deleteProduct(Product $product){
        Storage::delete('public/products/'.$product->imagen);
        $product->delete();
    }
    
    public function render()
    {
        $products = Product::paginate(18);
        return view('livewire.show-products',[
            'products' => $products
        ]);
    }
}
