<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('user')->insert([
            'name'=>'Azka',
            'email'=> 'azka2@gmail.com',
            'password'=>Hash::make('12345678910')
        ]);
    }
}
