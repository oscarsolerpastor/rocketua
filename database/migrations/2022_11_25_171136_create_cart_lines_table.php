<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_lines', function (Blueprint $table) {
            $table->id();
            $table->text('uuid');
            $table->boolean('active');
            $table->integer('cart_id');
            $table->integer('product_id');
            $table->integer('units');
            $table->integer('total_price');
            $table->integer('total_price_per_unit');
            $table->integer('total_base_price');
            $table->integer('total_base_price_per_unit');
            $table->integer('total_tax');
            $table->integer('total_tax_per_unit');
            $table->timestamps();

            $table->integer('cart_id')->unsigned();
            $table->foreign('cart_id')->references('id')->on('carts');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_lines');
    }
};
