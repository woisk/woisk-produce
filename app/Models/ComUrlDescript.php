<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComUrlDescript
 */
class ComUrlDescript extends Model
{
    protected $table = 'com_url_descript';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'descript'
    ];

    protected $guarded = [];

        
}