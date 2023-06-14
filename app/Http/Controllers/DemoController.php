<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use App\Models\Plan;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function show($demoSlug)
    {
        $demo = Demo::query()->where([
            'slug' => $demoSlug
        ])->firstOrFail();

        $plans = Plan::query()->get();

        return view($demoSlug, compact('demo', 'plans'));
    }
}
