<?php

namespace App\Filament\Resources\SubsciptionResource\Pages;

use App\Filament\Resources\SubsciptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\User;
use App\Models\Plan;


class EditSubsciption extends EditRecord
{
    protected static string $resource = SubsciptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
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



        return $data;
    }
}
