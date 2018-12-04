<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        for ($i=1; $i <= 43; $i++) { 
        	 $product = new Product([
        		'category_id' => rand(1, 9),
        		'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        		'body' => $faker->text($maxNbChars = 200),
                'image' => 'product_'.$i.'.png',
                'view_count' => rand(1, 10) * rand(7,8),
                'status' => rand(0, 1),
                'on_sale' => rand(0,1),
                'featured' => rand(0,1),
                'new' => rand(0,1),
                'date' => Carbon::now(),
                'price' => $faker->numberBetween($min = 100, $max = 990),
        	]);
            $product->save();
        }
        //DB::table('products')->insert($products);   
    }
}