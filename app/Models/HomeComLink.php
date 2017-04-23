<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeComLink
 */
class HomeComLink extends Model
{
    protected $table = 'home_com_link';

    protected $primaryKey = 'hid';

	public $timestamps = true;

    protected $fillable = [
        'link'
    ];

    protected $guarded = [];

        
}