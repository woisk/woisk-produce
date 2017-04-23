<?php

namespace App\Models;

/**
 * Class Account
 */
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use Notifiable;
    protected $table = 'account';

    public $timestamps = true;

    protected $fillable = [
        'uid',
        'username',
        'mobile',
        'email',
        'password',
        'name',
        'avatar',
        'login_count',
        'state'
    ];

    protected $guarded = [];

        
}