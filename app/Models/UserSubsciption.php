<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubsciption extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_id',
        'email',
        'plan',
        'responses',
        'rules',
        'auto_automation',
        'ended_at'
    ];
}
