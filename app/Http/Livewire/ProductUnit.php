<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;
use App\Models\ProductUser;
use App\Models\User;

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
        $this->emit('add-to-cart');
    }

    public function addItemToFavorites( $product_id, $user_id ){

        $product = Product::where('id', $product_id)->first(); 
        $user = null;
        
        // if(auth()->user()){
        //     $user = User::find($user_id);
        // }else{
        //      $this->emit("require-auth-user");
        // }

        // if($user != null){
            ProductUser::create([
                'user_id'=> $user->id ?? 1,
                'product_id'=> $product->id,
                'is_favorite'=> true
            ]);

            $this->emit("add-to-favorites");

        // }

    }

    public function render()
    {
        return view('livewire.product-unit');
    }
}