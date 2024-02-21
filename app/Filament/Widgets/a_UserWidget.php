<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;
use App\Models\Post;
use App\Models\UserSubsciption;
use Filament\Support\Enums\IconPosition;

class a_UserWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
            Stat::make('All Users', User::count())
            ->description('All users that have joined')
            ->descriptionIcon('heroicon-m-user-group', IconPosition::Before)
            ->chart([1,3,5,10,20,40])
            ->color('success'),

            Stat::make('All Subsciptions', UserSubsciption::count())
            ->description('All subsciptions that have joined')
            ->descriptionIcon('heroicon-m-banknotes', IconPosition::Before)
            ->chart([1,3,5,10,20,40])
            ->color('success'),

            Stat::make('New Posts', Post::count())
            ->description('All posts that have added')
            ->descriptionIcon('heroicon-m-clipboard-document-list', IconPosition::Before)
            ->chart([1,3,5,10,20,40])
            ->color('success'),
        ];
    }
}
