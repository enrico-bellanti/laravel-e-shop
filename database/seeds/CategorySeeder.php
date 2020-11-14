<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryList = [
            'motor',
            'videogames',
            'gardening',
            'football',
            'book',
            'cds',
            'pets',
            'mobile',
            'make-up',
            'flats'
        ];
        foreach ($categoryList as $categoryName) {
            $category = new Category;
            $category->name = $categoryName;
            $category->save();       
        }
    }
}
