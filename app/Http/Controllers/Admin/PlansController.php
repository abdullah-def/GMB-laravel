<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan as  ModelsPlan;
use Exception;
use Illuminate\Http\Request;
use Laravel\Cashier\Subscription;
use Stripe\Plan;

class PlansController extends Controller
{
    public function show(Request $request)
    {   
        
        return view('home');
    }

    public function create(Request $request)
    {   
        
        return view('admin.plan.create');
    }

    public function store(Request $request)
    {


        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $amount = ($request->amount * 100);

        try {

            $plan = Plan::create([
                'amount' => $amount,
                'currency' => $request->currency,
                'interval' => $request->billing_period,
                'interval_count' => $request->interval_count,
                'product' => [
                    'name' => $request->name
                ]
            ]);

            ModelsPlan::create([
                'plan_id' => $plan->id,
                'name' => $request->name,
                'price' => $plan->amount,
                'billing_method' => $plan->interval,
                'currency' => $plan->currency,
                'interval_count' => $plan->interval_count
            ]);

        }
        catch(Exception $ex){
            dd($ex->getMessage());
        }

        return "success";
    }
}
