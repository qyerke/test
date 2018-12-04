<?php

use Illuminate\Database\Seeder;

use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category([
            'title' => 'Computers & Laptops',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Cameras & Photos',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Hardware',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Smartphones & Tablets',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'TV & Audio',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Gadgets',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Car Electronics',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Video Games & Consoles',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Accessories',
        ]);
        $category->save();

    }
}
