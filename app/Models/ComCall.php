<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComCall
 */
class ComCall extends Model
{
    protected $table = 'com_call';

    public $timestamps = false;

    protected $fillable = [
        'number',
        'count',
        'com_call_isp_info'
    ];

    protected $guarded = [];

        
}