<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'Plan básico',
                'price' => 50000,
                'stripe_price_id' => 'price_1NDbe7BiGzyJGYgenyNZ1ZUR'
            ],
            [
                'name' => 'Plan pro',
                'price' => 100000,
                'stripe_price_id' => 'price_1NDbe7BiGzyJGYgeeBMmTZdn'
            ],
        ])->each(function ($plan) {
            Plan::factory()->create($plan);
        });
    }
}
