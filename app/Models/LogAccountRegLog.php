<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogAccountRegLog
 */
class LogAccountRegLog extends Model
{
    protected $table = 'log_account_reg_log';

    protected $primaryKey = 'uid';

	public $timestamps = false;

    protected $fillable = [
        'terminal_info',
        'times'
    ];

    protected $guarded = [];

        
}