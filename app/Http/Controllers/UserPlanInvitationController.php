<?php

namespace App\Http\Controllers;

use App\Models\GuestsGroup;
use App\Models\UserPlan;
use Illuminate\Http\Request;

class UserPlanInvitationController extends Controller
{
    public function show($userPlanSlug, $guestsGroupUuid = null)
    {
        $userPlan = UserPlan::query()->where('slug', $userPlanSlug)->firstOrFail();

        $guestsGroup = GuestsGroup::query()->where('uuid', $guestsGroupUuid)->first();

        return view('user-plan-invitations.show', compact('userPlan', 'guestsGroup'));
    }
}
