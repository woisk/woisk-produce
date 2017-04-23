<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogUserHomeLog
 */
class LogUserHomeLog extends Model
{
    protected $table = 'log_user_home_log';

    public $timestamps = false;

    protected $fillable = [
        'user_home',
        'uid',
        'type',
        'terminal_info',
        'times'
    ];

    protected $guarded = [];

        
}