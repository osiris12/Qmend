<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoursOfOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours_of_operations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->constrained();
            $table->time('open_time');
            $table->time('close_time');
            $table->unsignedTinyInteger('day');
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
        Schema::dropIfExists('hours_of_operations');
    }
}
