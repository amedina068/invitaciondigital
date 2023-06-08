<?php

namespace App\Http\Controllers;

use App\Models\GuestsGroup;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GuestsGroupController extends Controller
{
    public function index()
    {
        $guestsGroups = GuestsGroup::query()
            ->where([
                'order_id' => Order::query()->where('user_id', Auth::id())->first()->id
            ])
            ->paginate(24);

        return view('guest-groups.index', compact('guestsGroups'));
    }

    public function create()
    {
        return view('guest-groups.create');
    }

    public function store(Request $request)
    {
        $guestsGroup = GuestsGroup::create($request->merge([
            'uuid' => (string)Str::uuid(),
            'order_id' => Order::query()->where('user_id', Auth::id())->first()->id
        ])->only('order_id', 'uuid', 'name', 'phone', 'email', 'members'));

        return redirect('invitados');
    }
}
