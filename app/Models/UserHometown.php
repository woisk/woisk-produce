<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserHometown
 */
class UserHometown extends Model
{
    protected $table = 'user_hometown';

    protected $primaryKey = 'uid';

	public $timestamps = false;

    protected $fillable = [
        'hometowm',
        'address',
        'times'
    ];

    protected $guarded = [];

        
}