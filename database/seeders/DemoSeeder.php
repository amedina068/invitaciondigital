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
            'name' => 'Demo rerum 92',
            'slug' => 'demo-rerum-92',
            'page_components' => json_encode([
                'hero',
                'location',
                'date_time'
            ])
        ]);
        Demo::factory()->times(4)->create([
            'page_components' => json_encode([
                'hero',
                'location',
                'date_time'
            ])
        ]);
    }
}
