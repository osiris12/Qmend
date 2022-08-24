<?php

namespace Database\Seeders;

use App\Models\HoursOfOperation;
use Illuminate\Database\Seeder;

class HoursOfOperationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HoursOfOperation::factory()->count(100)->create();
    }
}
