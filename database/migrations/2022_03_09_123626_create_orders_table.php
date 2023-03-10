<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('country');
            $table->string('city');
            $table->string('contact');
            $table->string('address');
            $table->string('zipcode');
            $table->string('note');
            $table->string('payment_method');
            $table->string('total_product');
            $table->string('amount');
            $table->string('order_date');
            $table->string('status');
            $table->string('products');
            $table->string('size');
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
        Schema::dropIfExists('orders');
    }
}
