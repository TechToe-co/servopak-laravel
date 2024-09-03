<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClientsContactSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('client_contacts')->truncate();

        DB::table('client_contacts')->insert([
            'phone_number' => '917-325-3600',
            'email' => 'taimour@servopak.co',
            'address' => 'Apt T1 6626 Ronald Rd MD Capitol Heights 20743',
            'client_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
 
        DB::table('client_contacts')->insert([
            'phone_number' => '469-694-0707',
            'email' => 'skywaysexpresdispatch@gmail.com',
            'address' => '7901 4TH ST N STE 300 ST PETERSBURG FL 33702',
            'client_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
 
        DB::table('client_contacts')->insert([
            'phone_number' => '469-694-0707',
            'email' => 'info@4chainslogistics.com',
            'address' => '7901 4TH ST N STE 300 ST PETERSBURG FL 33702',
            'client_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
