<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVerify extends Model
{
    use HasFactory;

    protected $table = 'user_verify';

    protected $fillable = [
        'code',
        'expires_at',
        'user_id'  ,
        'verify_at'
    ];

    // 1-1
    public function user(){
        return $this->hasOne(UserVerify::class,'user_id');
    }
}
