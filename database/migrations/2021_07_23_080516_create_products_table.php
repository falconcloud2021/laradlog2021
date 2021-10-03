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
            $table->id();
	        $table->string('title');
	        $table->double('price', 15, 2);
	        $table->string('text_intro');
	        $table->text('text_full');
	        $table->string('alt_intro');
	        $table->string('alt_full');
	        $table->string('meta_title');
	        $table->string('meta_desc');
	        $table->tinyInteger('rating');
	        $table->integer('hits');
	        $table->tinyInteger('status');
	        $table->string('url');
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
