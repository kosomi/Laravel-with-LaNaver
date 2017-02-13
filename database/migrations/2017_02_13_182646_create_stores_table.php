<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user');
            $table->string('name'); 
            $table->string('phone')->nullable(); 
            $table->string('address')->nullable(); 
            $table->string('lng')->nullable(); 
            $table->string('lat')->nullable();  
            $table->string('memo')->nullable();  
            $table->string('image'); 
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
        Schema::dropIfExists('stores');
    }
}
