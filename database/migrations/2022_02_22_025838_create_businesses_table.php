<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status');
            $table->string('phone_number');
            $table->string('address');
            $table->string('zipcode');
            $table->foreignId('city_id')->constrained();
            $table->string('state_id', 2);
            $table->foreignId('country_id')->constrained();
            $table->decimal('lat', 7, 4);
            $table->decimal('lng', 7, 4);
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
        Schema::dropIfExists('businesses');
    }
}
