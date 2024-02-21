<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Plan;
use App\Models\User;


class PlanController extends Controller
{

    public function index()
    {

        $data = [
            'title' => config('app.name') . ' - Plans',
            'plans' => Plan::get(),
        ];
        return view("guest.plans", $data);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Request $request)
    {
        $plan = Plan::where('slug', $request->slug)->first();
        $data = [
            'title' => config('app.name') . ' - Subscription',
            'plan' => $plan,
            'intent' =>  auth()->user()->createSetupIntent(),
        ];


        return view("user.payment.checkout", $data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);

        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
            ->create($request->token);

        $user = $request->user();
        $user->plan_id = $request->plan;
        $user->subscribed = 1;
        $user->stripe_plan = $plan->stripe_plan;
        $user->stripe_session = $subscription->stripe_id;


        if ($user->plan?->plan_id) {

            $user->plan->plan_id = $plan->id;
            $user->plan->responses = $plan->response_num;
            $user->plan->ended_at = now()->addMonth()->format('Y-m-d');
            $user->plan->plan = $plan->name;
            $user->plan->email = $user->email;

            $user->plan->save();
        } else {
            $user->plan()->create([
                'plan_id' => $plan->id,
                'plan' => $plan->name,
                'email' => $user->email,
                'responses'  => $plan->response_num,
                'ended_at' => now()->addMonth()->format('Y-m-d'),


            ]);
        }



        if ($user->settings?->user_id) {

            
        } else {
            $user->settings()->create([
        
            ]);
        }

        

        $user->save();

        $token = $request->user()->createToken('API Token Of ' . $request->user()->name)->plainTextToken;

        return redirect()->route('notifications')->cookie('access_token',$token);
    }


}
