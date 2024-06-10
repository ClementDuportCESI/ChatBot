<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeywordProductTable extends Migration
{
    public function up()
    {
        Schema::create('keyword_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keyword_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keyword_product');
    }
}
