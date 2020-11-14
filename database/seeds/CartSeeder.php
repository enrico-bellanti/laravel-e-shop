<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            $cart = new Cart;
            $cart->user_id = $user->id;
            $cart->save();
        }
    }
}
