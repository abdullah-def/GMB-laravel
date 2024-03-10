<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubscribtionValidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // canceled
        // active
        // trialing

        if ($request->user()->stripe_session) {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $status = $stripe->subscriptions->retrieve($request->user()->stripe_session);
            // dd($status);
            // current_period_end

            if ($status->status == 'active' || $status->status == 'trialing') {
                return $next($request);
            } 
        }
        
        else if ($request->user()->plan?->ended_at)
        {
            $date_now = date("Y-m-d");
            if ($date_now < $request->user()->plan->ended_at){

                return $next($request);
            }

        }

        else {
            $user = $request->user();
            $user->subscribed = 0;
            $user->save();
            return redirect()->route('plans');
        }
        
    }
}
