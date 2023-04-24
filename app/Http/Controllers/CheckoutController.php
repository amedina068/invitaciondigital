<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function create(Request $request)
    {
        $plans = Plan::query()->get();
        return view('checkout', compact('plans'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => [ 'email', 'required', 'unique:users,email' ]
        ]);

        $user = User::create([
            'name' => $request->name, 
            'email' => $request->email,
            'uuid' => (string)Str::uuid(),
            'password' => bcrypt(Str::random())
        ]);

        Auth::login($user, true);

        UserPlan::create([
            'user_id' => $user->id,
            'plan_id' => $request->plan_id
        ]);
        
        return redirect('dashboard');
    }
}
