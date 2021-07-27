<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->integer('orderId')->unsigned();
            $table->foreign('orderId')->references('id')->on('orders');
            $table->integer('productId')->unsigned();
            $table->foreign('productId')->references('id')->on('products');
            $table->integer('quantity');
            $table->double('unitPrice');
            $table->primary(['orderId', 'productId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
