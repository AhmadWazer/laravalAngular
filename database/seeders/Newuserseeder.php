<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//use Illuminate\Support\Facades\DB;

class Newuserseeder extends Seeder
{
    public function run(): void
    {
       DB::table('newuser')->truncate();
        DB::table('newuser')->insert([
             [
             'name' => 'Ali',
             'father_name' => 'Hussain',
             'email' => 'ali@example.com',
             'phone' => '03401111110',
             'city' => 'Lahore',
             'gender' => 'male',
             'DoB' => '2000/8/15'
             ],
            [
             'name' => 'Nizar',
             'father_name' => 'Ahmad',
             'email' => 'nizar@example.com',
             'phone' => '03401111111',
             'city' => 'Lahore',
                'gender' => 'male',
             'DoB' => '2000/12/10'
            ],
            [
                'name' => 'Khalid',
                'father_name' => 'Musa',
                'email' => 'khalil@example.com',
                'phone' => '03401111112',
                'city' => 'Peshawar',
                'gender' => 'male',
                'DoB' => '2001/12/10'
            ],
            [
                'name' => 'Khan',
                'father_name' => 'Imran',
                'email' => 'khan@example.com',
                'phone' => '03401111113',
                'city' => 'Multan',
                'gender' => 'male',
                'DoB' => '2005/12/10'
            ],
            [
                'name' => 'Basit',
                'father_name' => 'Syeed',
                'email' => 'basit@example.com',
                'phone' => '03401111114',
                'city' => 'Multan',
                'gender' => 'male',
                'DoB' => '1999/12/10'
            ],
            [
                'name' => 'Hidar',
                'father_name' => 'Danish',
                'email' => 'hidar@example.com',
                'phone' => '03401111115',
                'city' => 'Karachi',
                'gender' => 'male',
                'DoB' => '2010/12/10'
            ],
            [
                'name' => 'Sajed',
                'father_name' => 'Siubhan',
                'email' => 'sajed@example.com',
                'phone' => '03401111116',
                'city' => 'karachi',
                'gender' => 'male',
                'DoB' => '2012/12/10'
            ],
            [
                'name' => 'Saleem',
                'father_name' => 'Salman',
                'email' => 'saleem@example.com',
                'phone' => '03401111117',
                'city' => 'Chitral',
                'gender' => 'male',
                'DoB' => '1995/12/10'
            ],
            [
                'name' => 'Musa',
                'father_name' => 'Murad',
                'email' => 'musa@example.com',
                'phone' => '03401111118',
                'city' => 'Gilgit',
                'gender' => 'male',
                'DoB' => '2009/12/10'
            ],
            [
                'name' => 'Asghar',
                'father_name' => 'Ahsaan',
                'email' => 'asghsr@example.com',
                'phone' => '03401111119',
                'city' => 'Lahore',
                'gender' => 'male',
                'DoB' => '2001/12/10'
            ]
        ]);
    }
}
