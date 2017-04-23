<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeComCall
 */
class HomeComCall extends Model
{
    protected $table = 'home_com_call';

    protected $primaryKey = 'hid';

	public $timestamps = true;

    protected $fillable = [
        'call'
    ];

    protected $guarded = [];

        
}