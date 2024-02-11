<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

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
