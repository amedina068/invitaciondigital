<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use App\Models\Plan;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function show($demoId)
    {
        $demo = Demo::query()->findOrFail($demoId);

        $plans = Plan::query()->get();

        return view('demos.show', compact('demo', 'plans'));
    }
}
