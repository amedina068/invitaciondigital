<?php

namespace App\Http\Controllers;

use App\Models\GuestsGroup;
use App\Models\UserPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GuestsGroupController extends Controller
{
    public function create()
    {
        return view('guest-groups.create');
    }

    public function store(Request $request)
    {
        $guestsGroup = GuestsGroup::create($request->merge([
            'uuid' => (string)Str::uuid(),
            'user_plan_id' => UserPlan::query()->where('user_id', Auth::id())->first()->id
        ])->only('user_plan_id', 'uuid', 'name', 'phone', 'email', 'members'));

        return redirect('dashboard');
    }
}
