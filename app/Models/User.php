<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;
    

    use SoftDeletes;
    protected $table ='_user';
    protected $fillable = [
        'Username',
        'email',
        'password',
        'loaitaikhoan_id'
    ];

    /*
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    /*
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    */
}
