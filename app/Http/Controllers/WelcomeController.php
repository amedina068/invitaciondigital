<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $demos = Demo::query()->get();
        return view('welcome', compact('demos'));
    }
}
