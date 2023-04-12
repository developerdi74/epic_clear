<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Area;
use App\Models\Lead;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $leads = Lead::factory(10)->create();
        $areas = Area::factory(5)->create();
        foreach($leads as $lead){
            $zn = rand(1,4);
            $areaId = $areas->random($zn)->pluck('id');
            $lead->area()->attach($areaId);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
