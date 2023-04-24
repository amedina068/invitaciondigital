<?php

namespace App\Http\Controllers;

use App\Models\GuestsGroup;
use Illuminate\Http\Request;

class GuestGroupController extends Controller
{
    public function create()
    {
        return view('guest-groups.create');
    }

    public function store(Request $request)
    {
        $guestsGroup = GuestsGroup::create([

        ]);

        return redirect('dashboard');
    }
}
