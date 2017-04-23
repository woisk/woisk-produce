<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComSnsIspBrand
 */
class ComSnsIspBrand extends Model
{
    protected $table = 'com_sns_isp_brand';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}