<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DayTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberOfTickets = DB::table('tickets')->get();
        $numberOfSpecialDays = DB::table('days')->get();
        
        for($i = 1; $i <= count($numberOfTickets); $i++){  
            for($j=1; $j <= count($numberOfSpecialDays); $j++){
                DB::table('day_ticket')->insert([
                    'ticket_id'=>$i,
                    'day_id'=>$j
                ]);
            } 
        }
    }
}
