<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserCall
 */
class UserCall extends Model
{
    protected $table = 'user_call';

    protected $primaryKey = 'uid';

	public $timestamps = true;

    protected $fillable = [
        'call'
    ];

    protected $guarded = [];

        
}