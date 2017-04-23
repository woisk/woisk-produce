<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogHomeLog
 */
class LogHomeLog extends Model
{
    protected $table = 'log_home_log';

    public $timestamps = false;

    protected $fillable = [
        'terminal',
        'times',
        'hid',
        'uid'
    ];

    protected $guarded = [];

        
}