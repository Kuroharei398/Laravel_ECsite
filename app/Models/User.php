<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends AuthenticatableUser
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'mail_address',
        'password',
        'user_name',
        'user_authority',
        'user_status'
    ];
}
