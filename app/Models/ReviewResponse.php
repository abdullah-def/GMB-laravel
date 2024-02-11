<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'stars',
        'avatar',
        'review',
        'response',
        'date_review',
        'date_response',
    ];
}
