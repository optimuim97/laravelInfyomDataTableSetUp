<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class ProductUnit extends Component
{
    public $product;
    public function mount($product){
        $this->product = $product;
    }

    public function addItem($id){
        $product = Product::where('id', $id)->first(); 

        Cart::add(
            ['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => floatval($product->price), 'weight' => 550]
        );

        $this->emit('reload-navbar');
    }

    public function render()
    {
        return view('livewire.product-unit');
    }
}