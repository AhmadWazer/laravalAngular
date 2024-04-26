<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customer')->truncate();
        DB::table('customer')->insert([
            [
                'customer_name' => 'customer1',
                'customer_email' => 'customer1@gmail.com',
                'gender' => 'male',
                'phone#' => 01234567,
                'dob' => '2010-10-10',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer2',
                'customer_email' => 'customer2@gmail.com',
                'gender' => 'male',
                'phone#' => 0340123,
                'dob' => '2012-5-10',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer3',
                'customer_email' => 'customer3@gmail.com',
                'gender' => 'female',
                'phone#' => 03401231,
                'dob' => '2016-11-24',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer4',
                'customer_email' => 'customer4@gmail.com',
                'gender' => 'male',
                'phone#' => 0340122,
                'dob' => '2009-5-15',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer5',
                'customer_email' => 'customer5@gmail.com',
                'gender' => 'male',
                'phone#' => 0334567,
                'dob' => '2011-1-17',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer6',
                'customer_email' => 'customer6@gmail.com',
                'gender' => 'male',
                'phone#' => 03433434,
                'dob' => '2019-6-29',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer7',
                'customer_email' => 'customer7@gmail.com',
                'gender' => 'male',
                'phone#' => 036563567,
                'dob' => '2002-7-4',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer8',
                'customer_email' => 'customer8@gmail.com',
                'gender' => 'female',
                'phone#' => 03454567,
                'dob' => '2005-12-10',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer9',
                'customer_email' => 'customer9@gmail.com',
                'gender' => 'male',
                'phone#' => 0344567,
                'dob' => '2000-10-30',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer10',
                'customer_email' => 'customer10@gmail.com',
                'gender' => 'female',
                'phone#' => 03334567,
                'dob' => '2010-8-2',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer11',
                'customer_email' => 'customer11@gmail.com',
                'gender' => 'male',
                'phone#' => 03404567,
                'dob' => '2002-10-3',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer12',
                'customer_email' => 'customer12@gmail.com',
                'gender' => 'male',
                'phone#' => 034234567,
                'dob' => '2010-3-23',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer13',
                'customer_email' => 'customer13@gmail.com',
                'gender' => 'male',
                'phone#' => 031234567,
                'dob' => '2010-1-1',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
            [
                'customer_name' => 'customer14',
                'customer_email' => 'customer14@gmail.com',
                'gender' => 'male',
                'phone#' => 03234567,
                'dob' => '2010-6-6',
                'created_at' => now(),
                'updated_at' => now(),
                'status' => 1
            ],
        ]);
    }
}
