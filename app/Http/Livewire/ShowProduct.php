<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowProduct extends Component
{
    public $product;
    
    public function render()
    {
        return view('livewire.show-product');
    }
}
