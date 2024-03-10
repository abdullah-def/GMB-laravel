<?php

namespace App\Filament\Resources\SubsciptionResource\Pages;

use App\Filament\Resources\SubsciptionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Plan;
use App\Models\UserSubsciption;

class CreateSubsciption extends CreateRecord
{
    protected static string $resource = SubsciptionResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $email = $data['email'];
        $plan = $data['plan'];
        // $responses = $data['responses'];
        // $ended_at = $data['ended_at'];
    

        $user = User::where(['email' => $email])->first();
        $paln = Plan::where(['name' => $plan])->first();
        
        $userid = $user->id;
        $planid = $paln->id;

        $data['user_id'] = $userid;
        $data['plan_id'] = $planid;


        $user->plan_id = $planid;
        $user->subscribed = 1;
        $user->stripe_plan = $paln->stripe_plan;

        if ($user->settings?->user_id) {

            
        } else {
            $user->settings()->create([
        
            ]);
        }
        $user->save();


        return $data;
    }

}
