<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComSnsIspInfo
 */
class ComSnsIspInfo extends Model
{
    protected $table = 'com_sns_isp_info';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'ico',
        'url',
        'uid',
        'count',
        'state',
        'com_sns_isp_info_type',
        'com_sns_isp_brand'
    ];

    protected $guarded = [];

        
}