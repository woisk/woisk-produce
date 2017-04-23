<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccountUserInfo
 */
class AccountUserInfo extends Model
{
    protected $table = 'account_user_info';

    protected $primaryKey = 'uid';

	public $timestamps = true;

    protected $fillable = [
        'user_info',
        'is_realname',
        'is_edu',
        'is_work',
        'is_marriage_state',
        'is_height',
        'is_weight'
    ];

    protected $guarded = [];

        
}