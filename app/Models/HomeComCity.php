<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeComCity
 */
class HomeComCity extends Model
{
    protected $table = 'home_com_city';

    protected $primaryKey = 'hid';

	public $timestamps = true;

    protected $fillable = [
        'city',
        'address'
    ];

    protected $guarded = [];

        
}