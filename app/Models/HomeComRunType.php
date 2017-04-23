<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeComRunType
 */
class HomeComRunType extends Model
{
    protected $table = 'home_com_run_type';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}