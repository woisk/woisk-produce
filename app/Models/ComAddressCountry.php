<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComAddressCountry
 */
class ComAddressCountry extends Model
{
    protected $table = 'com_address_country';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}