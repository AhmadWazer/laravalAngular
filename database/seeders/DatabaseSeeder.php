<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use App\Models\Newuser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         Newuserseeder::factory(10)->create();
//
//         Newuserseeder::factory()->create([
//             'name' => 'Ali',
//             'father_name' => 'Hussain',
//             'email' => 'test@example.com',
//             'phone' => '03401234567',
//             'city' => 'Lahore',
//             'DoB' => '10/10/2000'
//         ]);
        $this->call([
            Newuserseeder::class,
            CustomerSeeder::class,
            ItemSeeder::class
        ]);
    }
}
