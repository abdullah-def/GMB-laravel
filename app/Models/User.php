<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Cashier\Billable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Billable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id', // Add 'google_id' to the fillable array.
        'avatar',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function likes()
    {
        return $this->belongsToMany(Post::class, 'post_like')->withTimestamps();
    }

    public function hasLiked(Post $post)
    {
        return $this->likes()->where('post_id', $post->id)->exists();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function plan()
    {
        return $this->hasOne(UserSubsciption::class, 'user_id');
    }

    public function reviewResponse()
    {
        return $this->hasMany(ReviewResponse::class, 'user_id');
    }

    public function settings()
    {
        return $this->hasOne(Settings::class, 'user_id');
    }
}
