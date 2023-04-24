<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Plan;
use App\Models\PlanFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::query()->cursor()->each(function ($plan) {
            $features = Feature::query()
                ->inRandomOrder()
                ->take(5)
                ->cursor()
                ->each(function ($feature) use ($plan) {
                    PlanFeature::factory()->create([
                        'plan_id' => $plan->id,
                        'feature_id' => $feature->id,
                    ]);
                });
        });
    }
}
