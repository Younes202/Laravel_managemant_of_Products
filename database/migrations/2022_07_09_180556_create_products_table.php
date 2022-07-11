<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id()->unsigned()->index();
            $table->string('Name');
            $table->string('Description',1000);
            $table->string('Quantity');
            $table->string('Status');
            $table->string('Image');
            $table->string('Seller_id');
            $table->timestamps();
            $table->foreign('Seller_id')->references('id')->on('users')->onDelete('cascade');
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
