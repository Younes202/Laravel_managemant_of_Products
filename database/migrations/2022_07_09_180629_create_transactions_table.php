<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id()->unsigned()->index();
            $table->integer("Quantity")->unsigned();
            $table->bigInteger("Quantity")->unsigned();
            $table->bigInteger("Client_id")->unsigned();
            $table->bigInteger("Product_id")->unsigned();
            $table->timestamps();
            $table->foreign("Client_id")->references('id')->on('users')->onDelete('cascade');
            $table->foreign("Product_id")->references('id')->on('Products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
