<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Home
 */
class Home extends Model
{
    protected $table = 'home';

    public $timestamps = true;

    protected $fillable = [
        'hid',
        'alias',
        'state',
        'name',
        'name_alias',
        'logo',
        'url',
        'setup_time',
        'slogan',
        'home_info'
    ];

    protected $guarded = [];

        
}