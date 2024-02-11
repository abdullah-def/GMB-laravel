<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

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
                'price' => 49,
                'total_befor' => 49,
                'period' => '1 month',
                'one' => 49,
                'discount' => '0%',
                'description' => '100 AI Assisted Responses, 0.49$ per add. answer',
                'response_num' => 100,


            ],

            [
                'name' => 'Ziko AI Standard',
                'slug' => 'Standard_monthly',
                'stripe_plan' => 'price_1OewKXJTQfFPcbL71ttOvuDZ',
                'price' => 79,
                'total_befor' => 79,
                'period' => '1 month',
                'one' => 79,
                'discount' => '0%',
                'description' => '200 AI Assisted Responses,0.39$ per add. answer',
                'response_num' => 200,

            ],

            [
                'name' => 'Ziko AI Business',
                'slug' => 'Business_Plus_monthly',
                'stripe_plan' => 'price_1OewMcJTQfFPcbL72xiNYGLc',
                'price' => 169,
                'total_befor' => 169,
                'period' => '1 month',
                'one' => 169,
                'discount' => '0%',
                'description' => '500 AI Assisted Responses,0.33$ per add. answer',
                'response_num' => 500,

            ],


        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
// price_1Ogb8r2RLyhAaiYTjmtYRERN
// price_1OgbGk2RLyhAaiYT6gF5GQSQ
// price_1OgbJU2RLyhAaiYTKXKQuTWs


// Publishable key
// pk_live_51L3bR02RLyhAaiYTPn14ajHrYVXd7vu5Mpa6e5X7P8RNl5MDhE73Vs4iTBm8IL5Ntb2LLarkD8gINsumWLnFPZrm00f3Zs64mb

// Secret key
// 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 


// ChatGPT API key
// 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