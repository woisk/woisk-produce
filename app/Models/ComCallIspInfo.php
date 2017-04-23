<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComCallIspInfo
 */
class ComCallIspInfo extends Model
{
    protected $table = 'com_call_isp_info';

    public $timestamps = false;

    protected $fillable = [
        'type',
        'ico',
        'state',
        'count'
    ];

    protected $guarded = [];

        
}