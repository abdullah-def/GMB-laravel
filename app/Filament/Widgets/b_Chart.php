<?php

namespace App\Filament\Widgets;

use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\UserSubsciption;
use Filament\Widgets\ChartWidget;

class b_Chart extends ChartWidget
{
    protected static ?string $heading = 'New Subsciptions';
    protected static ?int $sort = 2;

    protected function getData(): array
    {   
        $data = Trend::model(UserSubsciption::class)
        ->between(
            start: now()->subDays(30),
            end: now(),
        )
        ->perDay()
        ->count();

        return [
            'datasets' => [
                [
                    'label' => 'New subsciptions last 30 days',
                    'data' => $data->map(fn (TrendValue $value ) =>$value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value ) =>$value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
