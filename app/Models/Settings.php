<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_name',
        'business_website',
        'business_address',
        'business_phone',
        'business_email',
        'business_industry',
        'basic_product',
        'five_star',
        'four_star',
        'three_star',
        'two_star',
        'one_star',
        'email_response',
        'email_news',
        'same_language',
        'language_choise',

    ];
}
