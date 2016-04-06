<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_desc');
            $table->string('product_detail');
            $table->double('price',10,2);
            $table->integer('category_id')->unsigned();
            $table->boolean('product_available');
            $table->string('picture_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products',function($table){
            $table->dropForeign('category_id');
        });        
        Schema::drop('products');
    }
}
