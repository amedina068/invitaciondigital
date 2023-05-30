<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\StripeClient;

class CheckoutController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret_key'));
    }

    public function create(Request $request, $planId)
    {
        $plan = Plan::query()->findOrFail($planId);

        $checkoutSession = Session::create([
          'line_items' => [[
            'price' => $plan->stripe_price_id,
            'quantity' => 1,
          ]],
          'metadata' => [
            'plan_id' => $plan->id
          ],
          'mode' => 'payment',
          'success_url' => url('orden-completada').'?session_id={CHECKOUT_SESSION_ID}',
          'cancel_url' => url('orden-incompleta'),
        ]);

        return redirect($checkoutSession->url);
    }

    public function store(Request $request)
    {
        $stripe = new StripeClient(config('services.stripe.secret_key'));
        $session = $stripe->checkout->sessions->retrieve($request->session_id, []);

        if($session->payment_status != 'paid') {
            return redirect('/');
        }

        $user = User::create([
            'name' => $session->customer_details->name,
            'uuid' => (string)Str::uuid(),
            'email' => $session->customer_details->email,
            'password' => bcrypt(Str::random(16))
        ]);

        Order::create([
            'user_id' => $user->id,
            'plan_id' => $session->metadata->plan_id
        ]);

        Auth::login($user, true);

        return redirect('dashboard');
    }
}
