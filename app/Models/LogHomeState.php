<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogHomeState
 */
class LogHomeState extends Model
{
    protected $table = 'log_home_state';

    protected $primaryKey = 'hid';

	public $timestamps = false;

    protected $fillable = [
        'pv',
        'uv',
        'ip'
    ];

    protected $guarded = [];

        
}