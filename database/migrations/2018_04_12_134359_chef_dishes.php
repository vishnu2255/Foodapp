<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChefDishes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_dishes', function (Blueprint $table) {
            $table->increments('dish_id');                       
            $table->string('name');
            $table->string('price');
            $table->string('cuisine_type');    
            $table->string('photo');   
            $table->string('cooktime');   
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
        //
    }
}
