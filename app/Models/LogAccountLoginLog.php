<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogAccountLoginLog
 */
class LogAccountLoginLog extends Model
{
    protected $table = 'log_account_login_log';

    public $timestamps = false;

    protected $fillable = [
        'uid',
        'terminal_info',
        'times'
    ];

    protected $guarded = [];

        
}