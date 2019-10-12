<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('seat');
            $table->text('description');
            $table->integer('cate_id');
            $table->integer('price');
            $table->integer('discount');
            $table->text('model');
            $table->text('owner');
            $table->date('registration_date');
            $table->integer('status');
            $table->integer('view');
            $table->text('address');
            $table->integer('city_id');
            $table->integer('district_id');
            $table->integer('image_id');
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
        Schema::dropIfExists('vehicels');
    }
}
