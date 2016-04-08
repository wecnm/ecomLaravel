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
    	DB::table('products')->delete();

    	DB::table('categories')->delete();

        Category::create(array(
        	'category_name' => 'apple',
        ));
        Category::create(array(
        	'category_name' => 'samsung',
        ));
        Category::create(array(
        	'category_name' => 'sony',
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
        	'product_name' => 'ipad',
        	'product_desc' => "Apple's iphone2",
        	'product_detail' => 'I love it 2 :)',
        	'price' => 999,
        	'category_id' => 1,
        	'product_available' => true,
        	'picture_path' => 'img/2.png',
        ));

        Product::create(array(
        	'product_name' => 'iWatch',
        	'product_desc' => "Apple's iphone2",
        	'product_detail' => 'I love it 2 :)',
        	'price' => 999,
        	'category_id' => 1,
        	'product_available' => true,
        	'picture_path' => 'img/2.png',
        ));

        Product::create(array(
        	'product_name' => 'Galaxy',
        	'product_desc' => "Apple's iphone2",
        	'product_detail' => 'I love it 2 :)',
        	'price' => 999,
        	'category_id' => 2,
        	'product_available' => true,
        	'picture_path' => 'img/2.png',
        ));

        Product::create(array(
        	'product_name' => 'TV',
        	'product_desc' => "Apple's iphone2",
        	'product_detail' => 'I love it 2 :)',
        	'price' => 999,
        	'category_id' => 2,
        	'product_available' => true,
        	'picture_path' => 'img/2.png',
        ));

        Product::create(array(
        	'product_name' => 'PS4',
        	'product_desc' => "Apple's iphone2",
        	'product_detail' => 'I love it 2 :)',
        	'price' => 999,
        	'category_id' => 3,
        	'product_available' => true,
        	'picture_path' => 'img/2.png',
        ));
        Product::create(array(
        	'product_name' => 'VR',
        	'product_desc' => "Apple's iphone2",
        	'product_detail' => 'I love it 2 :)',
        	'price' => 999,
        	'category_id' => 1,
        	'product_available' => true,
        	'picture_path' => 'img/2.png',
        ));
    }
}
