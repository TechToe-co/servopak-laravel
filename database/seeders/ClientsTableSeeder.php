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
                'base_url' => 'servopak.local',
                'logo' => 'logo.png',
                'favicon' => 'favicon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'BrainyTech',
                'base_url' => 'brainytech.local',
                'logo' => 'bt_logo.png',
                'favicon' => 'bt_favicon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'BTECH',
                'base_url' => 'btech.local',
                'logo' => 'logo.png',
                'favicon' => 'favicon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
               'name' => 'skyways express logistics LLC',
               'base_url' => 'skyways.local',
               'logo' => 'logo.png',
               'favicon' => 'favicon.png',
               'created_at' => now(),
               'updated_at' => now(),

            ],
            
        ]);
    }
}
