<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    const Starter = 'Ziko AI Starter';
    const Standard = 'Ziko AI Standard';
    const Business = 'Ziko AI Business';
    const PLANS = [
        self::Starter => 'Ziko AI Starter',
        self::Standard => 'Ziko AI Standard',
        self::Business => 'Ziko AI Business',
    ];
    

    protected $fillable = [
        'name',
        'slug',
        'stripe_plan',
        'price',
        'period',
        'description',
        'one',
        'discount',
        'total_befor',
        'response_num',

    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
