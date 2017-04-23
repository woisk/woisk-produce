<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComSnsIspInfoType
 */
class ComSnsIspInfoType extends Model
{
    protected $table = 'com_sns_isp_info_type';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}