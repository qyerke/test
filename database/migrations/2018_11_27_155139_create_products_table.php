<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('body');
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('status')->default(1);
            $table->integer('featured')->default(0);
            $table->integer('on_sale')->default(0);
            $table->integer('new')->default(0);
            $table->integer('trend')->default(0);
            $table->integer('view_count')->nullable();
            $table->integer('category_id')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('products');
    }
}
