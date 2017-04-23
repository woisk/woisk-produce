<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComSn
 */
class ComSn extends Model
{
    protected $table = 'com_sns';

    public $timestamps = false;

    protected $fillable = [
        'number',
        'count',
        'com_sns_isp_info'
    ];

    protected $guarded = [];

        
}