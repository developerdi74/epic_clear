<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leads')->insert([
            'name' => "name_".rand(900,951),
            'phone' => "8".rand(900,951),
            'zone' => "zone_",
            'time' => rand(1,31)."-".rand(1,12)."-23",
            'message' => 'Текст сообщения',
            'price' => rand(1900,22951),
            'process' => 0
        ]);
        //
    }
}
