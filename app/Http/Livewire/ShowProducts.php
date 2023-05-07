<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ShowProducts extends Component
{
    public $term;
    public $category;
    public $brand;

    protected $listeners = ['deleteProduct', 'findProduct'];

    public function findProduct($term, $category, $brand){
        $this->term = $term;
        $this->category = $category;
        $this->brand = $brand;
    }

    public function deleteProduct(Product $product){
        Storage::delete('public/products/'.$product->imagen);
        $product->delete();
    }
    
    public function render()
    {
        // $products = Product::paginate(18);
        $products = Product::when($this->term, function($query){
            $query->where(DB::raw('LOWER(nombre)'), 'LIKE', "%".strtolower($this->term)."%");
        })
        ->when($this->category, function($query){
            $query->where('category_id', $this->category);
        })
        ->when($this->brand, function($query){
            $query->where('brand_id', $this->brand);
        })
        ->paginate(18);

        return view('livewire.show-products',[
            'products' => $products
        ]);
    }
}
