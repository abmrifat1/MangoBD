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
            $table->string('uniue_id', 50);
            $table->string('name', 300);
            $table->string('sku', 50);
            $table->string('vendorId', 50);
            $table->string('supplierId', 50);
            $table->string('categoryId', 100);
            $table->string('regPrice', 100);
            $table->string('sellPrice', 100);
            $table->string('quantity', 100);
            $table->string('uniue_id', 50);
            $table->string('productAvailable', 100);
            $table->string('discount', 100)->nullable();
            $table->string('picture_1', 100)->default('default.jpg');
            $table->string('picture_2', 100);
            $table->string('picture_3', 100);
            $table->string('picture_4', 100);
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
