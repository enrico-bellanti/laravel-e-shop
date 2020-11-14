<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\User;
use App\Wallet;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
            $wallet = new Wallet;
            $wallet->user_id = $user->id;
            $wallet->name = $faker->firstName();
            $wallet->lastName = $faker->lastName;
            $wallet->address = $faker->address;
            $wallet->method_payment = $faker->creditCardType;
            $wallet->ccn = $faker->creditCardNumber;
            $wallet->account_balance = $faker->randomFloat(2, 150, 2000);
            $wallet->save();
        }
    }
}
