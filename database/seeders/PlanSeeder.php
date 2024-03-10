<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Carbon\Carbon;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $plans = [
            [
                'name' => 'Ziko AI Starter',
                'slug' => 'Startup_monthly',
                'stripe_plan' => 'price_1OewDFJTQfFPcbL7fPVnYcqW',
                'price' => 8,
                'total_befor' => 8,
                'period' => '1 month',
                'one' => 8,
                'discount' => '0%',
                'description' => '10 AI Assisted Responses, Custom Rules, Auto Reply',
                'response_num' => 10,


            ],

            [
                'name' => 'Ziko AI Standard',
                'slug' => 'Standard_monthly',
                'stripe_plan' => 'price_1OewKXJTQfFPcbL71ttOvuDZ',
                'price' => 17.99,
                'total_befor' => 17.99,
                'period' => '1 month',
                'one' => 17.99,
                'discount' => '0%',
                'description' => '40 AI Assisted Responses, Custom Rules, Auto Reply',
                'response_num' => 40,

            ],

            [
                'name' => 'Ziko AI Business',
                'slug' => 'Business_Plus_monthly',
                'stripe_plan' => 'price_1OewMcJTQfFPcbL72xiNYGLc',
                'price' => 39.99,
                'total_befor' => 39.99,
                'period' => '1 month',
                'one' => 39.99,
                'discount' => '0%',
                'description' => '100 AI Assisted Responses, Custom Rules, Auto Reply',
                'response_num' => 100,

            ],


            





            [
                'name' => 'Ziko AI Starter Extra',
                'slug' => 'Startup_monthly_extra',
                'stripe_plan' => 'price_1OrzFzJTQfFPcbL7qpWo0MlV',
                'price' => 4.99,
                'total_befor' => 4.99,
                'period' => '',
                'one' => 4.99,
                'discount' => '0%',
                'description' => '10 AI Assisted Responses, Custom Rules, Auto Reply',
                'response_num' => 10,


            ],

            [
                'name' => 'Ziko AI Standard Extra',
                'slug' => 'Standard_monthly_extra',
                'stripe_plan' => 'price_1Os2aGJTQfFPcbL7nKAm3P5Z',
                'price' => 10.99,
                'total_befor' => 10.99,
                'period' => '',
                'one' => 10.99,
                'discount' => '0%',
                'description' => '40 AI Assisted Responses, Custom Rules, Auto Reply',
                'response_num' => 40,

            ],

            [
                'name' => 'Ziko AI Business Extra',
                'slug' => 'Business_Plus_monthly_extra',
                'stripe_plan' => 'price_1Os2aRJTQfFPcbL7B13wcktv',
                'price' => 19.99,
                'total_befor' => 19.99,
                'period' => '',
                'one' => 19.99,
                'discount' => '0%',
                'description' => '100 AI Assisted Responses, Custom Rules, Auto Reply',
                'response_num' => 100,

            ],


        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }

        $superuser = [
            'name' => 'Chris',
            'email' => 'admin@ziko.ai',
            'password' => Hash::make('Sadiesassine12'),
            'avatar' => '/assets/img/User_01.jpg',
            'email_verified_at' => Carbon::now(),
            'role' => User::ROLE_ADMIN,
        ];
        
        $user = User::create($superuser);

        event(new Registered($user));
        $user->sendEmailVerificationNotification();


       

    }
}
// main


// we_1OsTk32RLyhAaiYT9BTVyAej 
// price_1Ogb8r2RLyhAaiYTjmtYRERN 
// price_1OgbGk2RLyhAaiYT6gF5GQSQ 
// price_1OgbJU2RLyhAaiYTKXKQuTWs


// Publishable key
// pk_live_51L3bR02RLyhAaiYTPn14ajHrYVXd7vu5Mpa6e5X7P8RNl5MDhE73Vs4iTBm8IL5Ntb2LLarkD8gINsumWLnFPZrm00f3Zs64mb

// Secret key
// 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 

// ChatGPT API key
// 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