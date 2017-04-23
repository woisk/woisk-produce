<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeComAssetsType
 */
class HomeComAssetsType extends Model
{
    protected $table = 'home_com_assets_type';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}