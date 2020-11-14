<?php

use Illuminate\Database\Seeder;

use App\Category;
use App\Item;

class PivotItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = Item::all();

        foreach ($items as $item) {
            $rand = rand(1,3);
            for ($i=0; $i < $rand; $i++) { 
                $category = Category::inRandomOrder()->first();
                if (!in_array($category->name, $category->items->name)) {
                    $category->items()->attach($item->id);
                    
                }
            };
        }
    }
}
