<?php

use Illuminate\Database\Seeder;

use App\Cart;
use App\Item;

class PivotCartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            $cart = Cart::inRandomOrder()->first();
            $item = Item::inRandomOrder()->first();
            $item->carts()->attach($cart->id);
        }
        
    }
}
