<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\ProductOrder;
use Livewire\Component;

class ShowCart extends Component
{
    public function delete($id)
    {
        $product_order = ProductOrder::find($id);
        $product_order->delete();
    }

    public function render()
    {
        $order = Order::where('cliente_id', auth()->user()->cliente->id)->where('status_id', 1)->first();
        if($order){            
            $product_orders = ProductOrder::where('order_id', $order->id)->get();
            $total = $product_orders->sum('subtotal');
            
            return view('livewire.show-cart', [
                'product_orders' => $product_orders,
                'total' => $total,
            ]);
        }
        return view('livewire.show-cart', [
            'product_orders' => []
        ]);
    }
}
