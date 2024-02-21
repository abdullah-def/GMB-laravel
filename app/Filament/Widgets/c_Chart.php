<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\User;

class c_Chart extends ChartWidget
{
    protected static ?string $heading = 'New Users';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = Trend::model(User::class)
        ->between(
            start: now()->subDays(30),
            end: now(),
        )
        ->perDay()
        ->count();

        return [
            'datasets' => [
                [
                    'label' => 'New users last 30 days',
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
