<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->truncate();
        
        DB::table('clients')->insert([
            [
                'id' => 1,
                'name' => 'ServoPak',
                'base_url' => 'servopak.co',
                'logo' => 'logo.png',
                'favicon' => 'favicon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'SkyWays',
                'base_url' => 'mohsinayyaz.com',
                'logo' => 'logo.png',
                'favicon' => 'favicon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => '4chainslogistics',
                'base_url' => '4chainslogistics.com',
                'logo' => 'logo.png',
                'favicon' => 'favicon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
