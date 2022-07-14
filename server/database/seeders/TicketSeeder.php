<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            [
                'ticket_name'=>'kid',
                'ticket_price'=>'5',
                'ticket_price_special'=>'6',
                'ticket_description'=>'Height less than 1m4'
            ],
            [
                'ticket_name'=>'student',
                'ticket_price'=>'10',
                'ticket_price_special'=>'12',
                'ticket_description'=>'With student card'
            ],
            [
                'ticket_name'=>'adult',
                'ticket_price'=>'15',
                'ticket_price_special'=>'18',
                'ticket_description' => ''
            ]
        ]);
    }
}
