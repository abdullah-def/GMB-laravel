<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\Log;

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

    public function extr(Request $request)
    {
        $plan = Plan::where('slug', $request->slug)->first();
        $data = [
            'title' => config('app.name') . ' - Extra',
            'plan' => $plan,
            'intent' =>  auth()->user()->createSetupIntent(),
        ];


        return view("user.payment.extracheckout", $data);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        
        
        $plan = Plan::find($request->plan);
        
        
        if (!$request->user()->trialing){
            
            $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
            ->trialUntil(now()->addMinutes(10))->create($request->token);
            $response = 15;
        }
        
        else {
            
            $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
            ->create($request->token);
            $response = $plan->response_num;
        }

        
        
        if($request->autorenew == null){
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $stripe->subscriptions->update($subscription->stripe_id, ['cancel_at_period_end' => true]);
        }

        $user = $request->user();
        $user->plan_id = $request->plan;
        $user->subscribed = 1;
        $user->trialing = 1;
        $user->stripe_plan = $plan->stripe_plan;
        $user->stripe_session = $subscription->stripe_id;




        if ($user->plan?->plan_id) {

            $user->plan->plan_id = $plan->id;
            $user->plan->responses = $response;
            $user->plan->ended_at = now()->addMonth()->format('Y-m-d');
            $user->plan->plan = $plan->name;
            $user->plan->email = $user->email;

            $user->plan->save();
        } else {
            $user->plan()->create([
                'plan_id' => $plan->id,
                'plan' => $plan->name,
                'email' => $user->email,
                'responses'  => $response,
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

    public function extraSubscription(Request $request)
    {
        $plan = Plan::find($request->plan);

        $subscription = $request->user()->charge( $plan->price*100, $request->token);
        if ($subscription->status == "succeeded")
        {
            $response = $plan->response_num;
            $current_balance = $request->user()->plan->responses;

            $user = $request->user();
            $user->plan->responses = $response + $current_balance;
            $user->plan->save();

            smilify('success', $response.' AI Assisted Responses have been added');
            return redirect()->route('dashbord');
        }
        else {

            smilify('error', 'An error occurred, please try again');
            return redirect()->route('dashbord');

        }
        
    }


    public function webhooks(Request $request)
    {
        // 

        // Log::debug("message", $request->all());
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $endpoint_secret = env('STRIPE_WEBHOOK_SECRET');

        $payload = @file_get_contents('php://input');
        $event = null;

        try {
            $event = \Stripe\Event::constructFrom(
              json_decode($payload, true)
            );
        } catch(\UnexpectedValueException $e) {
            // Invalid payload
            Log::debug("Webhook error while parsing basic request.", $request->all());
            
            http_response_code(400);
            exit();
        }

        switch ($event->type) {

            
            case 'customer.subscription.updated':
                $subscription = $event->data->object; 
                

                $status = $subscription->status;
                if ($status == 'active'){
                    $plan = Plan::where('stripe_plan', $subscription->items->data[0]->plan->id)->first();
                    $user = User::where('stripe_session', $subscription->id)->first();



                    $user->plan_id = $plan->id;
                    $user->subscribed = 1;
                    $user->trialing = 1;
                    $user->save();

                    if ($user->plan?->plan_id) {

                        $user->plan->plan_id = $plan->id;
                        $user->plan->responses = $plan->response_num;
                        $user->plan->ended_at = now()->addMonth()->format('Y-m-d');
                        $user->plan->plan = $plan->name;
                        $user->plan->email = $user->email;
            
                        $user->plan->save();
                    }


                }


                break;
            default:
                Log::debug("Received unknown event type", $request->all());
                error_log('Received unknown event type');
        }
        http_response_code(200);
    }

}
