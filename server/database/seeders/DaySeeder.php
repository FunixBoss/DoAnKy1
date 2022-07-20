<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            [
                'day'=>'Saturday',
                'day_description'=>'Weekend'
            ],
            [
                'day'=>'Sunday',
                'day_description'=>'Weekend'
            ],
            [
                'day'=>'26-07',
                'day_description'=>'test'
            ]

        ]);
    }
}
