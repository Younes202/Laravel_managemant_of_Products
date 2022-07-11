<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategorieProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_produit', function (Blueprint $table) {
            $table->unsignedBigInteger('categorie_id')->index();
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->collation="utf8mb4_unicode_ci";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorie_produit');
    }
}
