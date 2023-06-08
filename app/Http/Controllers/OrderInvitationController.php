<?php

namespace App\Http\Controllers;

use App\Models\GuestsGroup;
use App\Models\Order;
use App\Models\UserPlan;
use Illuminate\Http\Request;

class OrderInvitationController extends Controller
{
    public function show($orderSlug, $guestsGroupUuid = null)
    {
        $userPlan = Order::query()->where('slug', $orderSlug)->firstOrFail();

        $guestsGroup = GuestsGroup::query()->where('uuid', $guestsGroupUuid)->first();

        return view('user-plan-invitations.show', compact('userPlan', 'guestsGroup'));
    }
}
