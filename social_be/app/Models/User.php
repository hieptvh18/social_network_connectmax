<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\SocialNetwork\Models\Follow;
use Modules\SocialNetwork\Models\Post;
use Overtrue\LaravelLike\Traits\Liker;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,Liker;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'bio',
        'phone',
        'avatar',
        'birthday',
        'location',
        'gender',
        'status',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'linkedln_link',
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
    ];

    //  relationships
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class,'user_id');
    }

    public function following(): HasMany
    {
        return $this->hasMany(Follow::class,'user_id');
    }

    public function follower(): HasMany
    {
        return $this->hasMany(Follow::class,'following_id');
    }

    // format timestamp
    public function getCreatedAtAttribute($timestamp)
    {
        return caculateDatetime($timestamp);
    }

    public function getUpdatedAtAttribute($timestamp)
    {
        return caculateDatetime($timestamp);
    }

    public function socialAccounts(){
        return $this->hasMany(SocialAccount::class,'user_id');
    }

    // 1-1
    public function userVerify(){
        return $this->hasOne(UserVerify::class,'user_id');
    }
}
