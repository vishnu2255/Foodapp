<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chefs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('account');
            $table->string('emailaddress');
            // $table->string('profilepic');
            $table->string('licensepic');
            $table->string('cuisinetype');
            $table->string('profilepic');
            $table->string('menuid');
            $table->string('storehours');
            $table->string('location');
            $table->string('rating');
            $table->string('ordernum');
            $table->string('revenue');
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
        Schema::dropIfExists('chefs');
    }
}
