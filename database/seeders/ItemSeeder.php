<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->truncate();
        DB::table('items')->insert([
            [
                'item_name' => 'item1',
                'manufacturing_date' => '2023-12-10',
                'expires_date' => '2024-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'item2',
                'manufacturing_date' => '2022-12-10',
                'expires_date' => '2024-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'item3',
                'manufacturing_date' => '2021-12-10',
                'expires_date' => '2023-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'item4',
                'manufacturing_date' => '2022-12-10',
                'expires_date' => '2023-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'item5',
                'manufacturing_date' => '2022-12-10',
                'expires_date' => '2023-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'item6',
                'manufacturing_date' => '2023-12-10',
                'expires_date' => '2024-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'item7',
                'manufacturing_date' => '2023-12-10',
                'expires_date' => '2024-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'item8',
                'manufacturing_date' => '2023-12-10',
                'expires_date' => '2024-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'item9',
                'manufacturing_date' => '2023-12-10',
                'expires_date' => '2024-12-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_name' => 'item10',
                'manufacturing_date' => '2023-10-10',
                'expires_date' => '2024-10-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ]);
    }
}
