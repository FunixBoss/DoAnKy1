<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            [
                'email'=>'superadmin@gmail.com',
                'fullname'=>'superadmin',
                'password'=>bcrypt('123'),
                'phone'=>'123',
                'level'=>'1',
            ],
            [
                'email'=>'admin@gmail.com',
                'fullname'=>'admin',
                'password'=>bcrypt('123'),
                'phone'=>'123',
                'level'=>'1',
            ],
            [
                'email'=>'member@gmail.com',
                'fullname'=>'member',
                'password'=>bcrypt('123'),
                'phone'=>'123',
                'level'=>'2',
            ],
            [
                'email'=>'member2@gmail.com',
                'fullname'=>'member2',
                'password'=>bcrypt('123'),
                'phone'=>'123',
                'level'=>'2',
            ],
            [
                'email'=>'member3@gmail.com',
                'fullname'=>'member3',
                'password'=>bcrypt('123'),
                'phone'=>'123',
                'level'=>'2',
            ],
        ]
        );
    }
}
