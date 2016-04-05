<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->delete();
        DB::table('products')->delete();

        Category::create(array(
        	'category_name' => 'mobile',
        ));

        Product::create(array(
        	'product_name' => 'iphone',
        	'product_desc' => "Apple's iphone",
        	'product_detail' => 'I love it :)',
        	'price' => 499,
        	'category_id' => 1,
        	'product_available' => true,
        	'picture_path' => 'img/1.png',
        ));

        Product::create(array(
        	'product_name' => 'iphone',
        	'product_desc' => "Apple's iphone2",
        	'product_detail' => 'I love it 2 :)',
        	'price' => 999,
        	'category_id' => 1,
        	'product_available' => true,
        	'picture_path' => 'img/2.png',
        ));
    }
}
