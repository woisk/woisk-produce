<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComSn
 */
class UserComSn extends Model
{
    protected $table = 'user_com_sns';

    protected $primaryKey = 'uid';

	public $timestamps = true;

    protected $fillable = [
        'sns'
    ];

    protected $guarded = [];

        
}