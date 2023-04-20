<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Area;
use App\Models\Lead;
use App\Models\Seo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $leads = Lead::factory(20)->create();
        $areas = Area::factory(8)->create();
        foreach($leads as $lead){
           $zn = rand(0,4);
            $areaId = $areas->random($zn)->pluck('id');
            $lead->area()->attach($areaId);
        }
        $seo = Seo::factory(1)->create();
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
