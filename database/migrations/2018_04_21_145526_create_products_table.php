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
            $table->string('slug')->unique();
            $table->text('configuration');
            $table->string('description');
            $table->integer('quantity_store');
            $table->integer('price');
            $table->integer('rating');
            $table->integer('sales');
            $table->string('image');
            $table->integer('category_id')->unsigned();;
            $table->integer('manufacture_id')->unsigned();;

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('manufacture_id')->references('id')->on('manufacturers')->onDelete('cascade');
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
