<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_contacts')->insert([
            'phone_number' => '469-694-0707',
            'email' => 'skywaysexpresdispatch@gmail.com',
            'address' => '7901 4TH ST N STE 300 ST PETERSBURG FL 33702',
            'client_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
