<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComAddressEffect
 */
class ComAddressEffect extends Model
{
    protected $table = 'com_address_effect';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}