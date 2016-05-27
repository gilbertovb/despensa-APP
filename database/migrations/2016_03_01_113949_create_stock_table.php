<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->increments('stock_id');
            $table->integer('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->integer('user_id')->references('user_id')->on('users');
            $table->double('min',3,2);
            $table->double('current',3,2);
            $table->unique(['product_id', 'user_id']);
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
        Schema::drop('stock');
    }
}
