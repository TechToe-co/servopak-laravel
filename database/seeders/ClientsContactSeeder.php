<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClientsContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_contacts')->insert([
            'phone_number' => '917-325-3600',
            'email' => 'taimour@servopak.co',
            'address' => 'Apt T1 6626 Ronald Rd MD Capitol Heights 20743',
            'client_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('client_contacts')->insert([
            'phone_number' => '912-323-5300',
            'email' => 'ubaid@brainytech.co',
            'address' => '4K, K-Block Model Town Lahore',
            'client_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
