<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->integer('price')->default(0);
            $table->unsignedInteger('category')->nullable();
            $table->foreign('category')->references('id')->on('categories');
            $table->unsignedInteger('spicy')->nullable();
            $table->foreign('spicy')->references('id')->on('spicies');
            $table->string('img_url1')->nullable();
            $table->string('img_url2')->nullable();
            $table->string('img_url3')->nullable();
            $table->string('brochure')->nullable();
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
        Schema::dropIfExists('product');
    }
}
