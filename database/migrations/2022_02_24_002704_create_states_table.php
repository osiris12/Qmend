<?php

use App\Models\State;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('state_id', 2)->unique();
            $table->string('name');
            $table->foreignId('country_id')->constrained();
            $table->timestamps();
        });

        $data =  array(
            ['state_id' => 'AL', 'name' => 'Alabama', 'country_id' => '1'],
            ['state_id' => 'AK', 'name' => 'Alaska' , 'country_id' => '1',],
            ['state_id' => 'AZ',  'name' => 'Arizona', 'country_id' => '1',],
            ['state_id' => 'AR',  'name' => 'Arkansas', 'country_id' => '1',],
            ['state_id' => 'CA',  'name' => 'California', 'country_id' => '1',],
            ['state_id' => 'CO',  'name' => 'Colorado', 'country_id' => '1',],
            ['state_id' => 'CT',  'name' => 'Connecticut', 'country_id' => '1',],
            ['state_id' => 'DE',  'name' => 'Delaware', 'country_id' => '1',],
            ['state_id' => 'FL',  'name' => 'Florida', 'country_id' => '1',],
            ['state_id' => 'GA',  'name' => 'Georgia', 'country_id' => '1',],
            ['state_id' => 'HI',  'name' => 'Hawaii', 'country_id' => '1',],
            ['state_id' => 'IA',  'name' => 'Idaho', 'country_id' => '1',],
            ['state_id' => 'IL',  'name' => 'Illinois', 'country_id' => '1',],
            ['state_id' => 'IN',  'name' => 'Indiana', 'country_id' => '1',],
            ['state_id' => 'ID',  'name' => 'Iowa', 'country_id' => '1',],
            ['state_id' => 'KS',  'name' => 'Kansas', 'country_id' => '1',],
            ['state_id' => 'KY',  'name' => 'Kentucky', 'country_id' => '1',],
            ['state_id' => 'LA',  'name' => 'Louisiana', 'country_id' => '1',],
            ['state_id' => 'ME',  'name' => 'Maine', 'country_id' => '1',],
            ['state_id' => 'MD',  'name' => 'Maryland', 'country_id' => '1',],
            ['state_id' => 'MA',  'name' => 'Massachusetts', 'country_id' => '1',],
            ['state_id' => 'MI',  'name' => 'Michigan', 'country_id' => '1',],
            ['state_id' => 'MN',  'name' => 'Minnesota', 'country_id' => '1',],
            ['state_id' => 'MS',  'name' => 'Mississippi', 'country_id' => '1',],
            ['state_id' => 'MO',  'name' => 'Missouri', 'country_id' => '1',],
            ['state_id' => 'MT',  'name' => 'Montana', 'country_id' => '1',],
            ['state_id' => 'NE',  'name' => 'Nebraska', 'country_id' => '1',],
            ['state_id' => 'NV',  'name' => 'Nevada', 'country_id' => '1',],
            ['state_id' => 'NH',  'name' => 'New Hampshire', 'country_id' => '1',],
            ['state_id' => 'NJ',  'name' => 'New Jersey', 'country_id' => '1',],
            ['state_id' => 'NM',  'name' => 'New Mexico', 'country_id' => '1',],
            ['state_id' => 'NY',  'name' => 'New York', 'country_id' => '1',],
            ['state_id' => 'NC',  'name' => 'North Carolina', 'country_id' => '1',],
            ['state_id' => 'ND',  'name' => 'North Dakota', 'country_id' => '1',],
            ['state_id' => 'OH',  'name' => 'Ohio', 'country_id' => '1',],
            ['state_id' => 'OK',  'name' => 'Oklahoma', 'country_id' => '1',],
            ['state_id' => 'OR',  'name' => 'Oregon', 'country_id' => '1',],
            ['state_id' => 'PA',  'name' => 'Pennsylvania', 'country_id' => '1',],
            ['state_id' => 'RI',  'name' => 'Rhode Island', 'country_id' => '1',],
            ['state_id' => 'SC',  'name' => 'South Carolina', 'country_id' => '1',],
            ['state_id' => 'SD',  'name' => 'South Dakota', 'country_id' => '1',],
            ['state_id' => 'TN',  'name' => 'Tennessee', 'country_id' => '1',],
            ['state_id' => 'TX',  'name' => 'Texas', 'country_id' => '1',],
            ['state_id' => 'UT',  'name' => 'Utah', 'country_id' => '1',],
            ['state_id' => 'VT',  'name' => 'Vermont', 'country_id' => '1',],
            ['state_id' => 'VA',  'name' => 'Virginia', 'country_id' => '1',],
            ['state_id' => 'WA',  'name' => 'Washington', 'country_id' => '1',],
            ['state_id' => 'WV',  'name' => 'West Virginia', 'country_id' => '1',],
            ['state_id' => 'WI',  'name' => 'Wisconsin', 'country_id' => '1',],
            ['state_id' => 'WY',  'name' => 'Wyoming', 'country_id' => '1',],
        );
        foreach ($data as $datum){
            $category = new State(); //The Category is the model for your migration
            $category->state_id =$datum['state_id'];
            $category->name =$datum['name'];
            $category->country_id =$datum['country_id'];
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
        Schema::dropIfExists('states');
    }
}
