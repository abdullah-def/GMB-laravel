<?php

namespace App\Http\Controllers\Api\GoogleReview;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\ChatGpt\ChatGpt;
use Illuminate\Http\Request;
use App\Notifications\ReviewNotification;
use Carbon;
use App\Models\ReviewResponse;


class MainApi extends Controller
{
    //

    public function check(Request $request)
    {   
        $user = $request->user();
        $statu = 'canceled';
        if ($user->stripe_session)
        {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $status = $stripe->subscriptions->retrieve($user->stripe_session);
            if ($status->status == 'active') {
                $statu = 'active';
            }
            else {
                $statu = $status->status;

            }
        }

        $date_now = date("Y-m-d");
        if ($user->plan?->ended_at){
            if ($date_now < $user->plan->ended_at){

                $statu = 'active';
            }
            

        }

        return response()->json([
            'subscription_status' => $statu,
            'user_email' => $user->email,
            'user_name' => $user->name,
            'user_credit' => $user->plan->responses,
            'rules' => [
                'five_star'=> $user->settings->five_star,
                'four_star'=> $user->settings->four_star,
                'three_star'=> $user->settings->three_star,
                'two_star'=> $user->settings->two_star,
                'one_star'=> $user->settings->one_star,
            ]
        ]);

    }


    public function response(Request $request)
    {   



        $user = $request->user();
        $statu = 'canceled';
        $response = 'false';
        if ($user ->stripe_session)
        {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $status = $stripe->subscriptions->retrieve($user->stripe_session);
            if ($status->status == 'active') {
                $statu = 'active';
            }
            else {
                $statu = $status->status;
            }
        }

        $date_now = date("Y-m-d");
        if ($user->plan?->ended_at){
            if ($date_now < $user->plan->ended_at){

                $statu = 'active';
            }
           

        }




        $review = $request->review;
        $name = $request->name;
        $avatar = $request->avatar;
        $date = $request->date;
        $stars = $request->stars;


        if ( !$user->plan->responses || $statu == 'canceled')
        {
            $response = 'false';
        }
        else{

            // gpt
            $GPT = new ChatGpt($review, 
                                $name, 
                                $stars, 
                                $user->settings->business_name, 
                                $user->settings->business_website, 
                                $user->settings->business_industry, 
                                $user->settings->basic_product,
                                $user->settings->same_language,
                                $user->settings->language_choise,);

            $response = $GPT->getResponse();



        }

        if ($user->plan->responses ){
        $user->plan->responses = $user->plan->responses - 1;
        $user->plan->save();
        }

        // notification 
        $data = [
            // 'business_name' => $this->data['business_name'],
            'stars' => $stars,
            'name' => $name,
            'review' => $review,
            // 'status' => $this->data['status'],
            'time' => Carbon\Carbon::now(),
        ];
        $user->notify(new ReviewNotification($data));

        // insert review 
        $user->reviewResponse()->create([
            'review' => $review,
            'name' => $name,
            'avatar' => $avatar,
            'date_review' => $date,
            'stars' => $stars,
            'response' => $response,
            'date_response' => Carbon\Carbon::now(),
        ]);
        // $user->reviewResponse->save();

        return response()->json([
            'subscription_status' => $statu,
            'user_email' => $user->email,
            'user_name' => $user->name,
            'user_credit' => $user->plan->responses,
            'rules' => [
                'five_star'=> $user->settings->five_star,
                'four_star'=> $user->settings->four_star,
                'three_star'=> $user->settings->three_star,
                'two_star'=> $user->settings->two_star,
                'one_star'=> $user->settings->one_star,
            ],
            'response' => $response, 
           
        ]);

    }

    public function auto(Request $request)
    {   
        $user = $request->user();
        $auto = $request->auto_response;

        $user->plan->auto_automation = $auto;
        $user->plan->save();

        return response($status =200);

    }
}
