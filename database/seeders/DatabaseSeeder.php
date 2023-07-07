<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Area;
use App\Models\Lead;
use App\Models\Seo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => "admin",
             'email_verified_at' => now(),
             'role' => "admin",
             'password' => bcrypt('admin'), // password
             'remember_token' => Str::random(10),
         ]);

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
