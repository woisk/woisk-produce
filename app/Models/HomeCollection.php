<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HomeCollection
 */
class HomeCollection extends Model
{
    protected $table = 'home_collection';

    public $timestamps = true;

    protected $fillable = [
        'hid',
        'uid',
        'state'
    ];

    protected $guarded = [];

        
}