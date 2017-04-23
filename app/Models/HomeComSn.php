<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeComSn
 */
class HomeComSn extends Model
{
    protected $table = 'home_com_sns';

    protected $primaryKey = 'hid';

	public $timestamps = true;

    protected $fillable = [
        'sns'
    ];

    protected $guarded = [];

        
}