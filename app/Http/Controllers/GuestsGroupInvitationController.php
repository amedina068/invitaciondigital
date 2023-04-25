<?php

namespace App\Http\Controllers;

use App\Models\GuestsGroup;
use App\Models\UserPlan;
use Illuminate\Http\Request;

class GuestsGroupInvitationController extends Controller
{
    public function update(Request $request, $userPlanSlug)
    {
        $request->validate([
        ]);

        $userPlan = UserPlan::query()->where('slug', $userPlanSlug)->firstOrFail();

        // if($request->boolean('accept'))

        $guestsGroup = GuestsGroup::query()->where([
            'user_plan_id' => $userPlan->id,
            'uuid' => $request->guests_group_uuid,
        ])->firstOrFail();

        $data = $request->only('notes');

        if($request->boolean('accept')) {
            $data = array_merge($data, [
                'confirmed_at' => now(),
                'confirmed_members' => $request->confirmed_members
            ]);
        } else {
            $data = array_merge($data, [
                'canceled_at' => now(),
            ]);
        }

        $guestsGroup->update($data);

        return back();
    }
}
