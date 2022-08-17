<?php

use App\Models\Source;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $data = array(
            ['name' => 'Google'],
            ['name' => 'Yelp'],
            ['name' => 'Tripadvisor'],
            ['name' => 'Grubhub'],
            ['name' => 'OpenTable']
        );

        foreach ($data as $source){
            $category = new Source(); //The Category is the model for your migration
            $category->name = $source['name'];
            $category->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sources');
    }
}
