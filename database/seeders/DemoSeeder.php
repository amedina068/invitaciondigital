<?php

namespace Database\Seeders;

use App\Models\Demo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Demo::factory()->create([
            'name' => 'Demo Boda 1',
            'slug' => 'demo-boda-1',
        ]);

        Demo::factory()->create([
            'name' => 'Demo Boda 2',
            'slug' => 'demo-boda-2',
        ]);
    }
}
