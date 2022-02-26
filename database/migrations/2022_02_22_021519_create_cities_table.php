<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 35);
            $table->string('state_id', 2);
            $table->decimal('lat', 7, 4);
            $table->decimal('lng', 7, 4);
            $table->unsignedInteger('population');
            $table->unsignedInteger('density');
            $table->string('timezone', 30);
            $table->string('zips', 1859)->nullable();
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
        Schema::dropIfExists('cities');
    }
}
