<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Item;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 35; $i++) { 
            $item = new Item;
            $item->name = $faker->sentence(5, true);
            $item->image = "https://picsum.photos/800/600?random=1";
            $item->description = $faker->paragraph(6, true);
            $item->price = $faker->randomFloat(2, $min = 10, $max = 500);
            $item->likes = $faker->numberBetween(200, 4000);
            $item->qty = $faker->numberBetween(1, 300);
            $item->save();
        }
    }
}
