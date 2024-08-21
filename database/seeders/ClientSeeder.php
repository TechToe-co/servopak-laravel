<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            
                'id' => 4,
                'name' => 'skyways express logistics LLC',
                'base_url' => 'skyways.local',
                'logo' => 'logo.png',
                'favicon' => 'favicon.png',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }    
        
}
