<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComAddressCity
 */
class ComAddressCity extends Model
{
    protected $table = 'com_address_city';

    public $timestamps = false;

    protected $fillable = [
        'province',
        'city',
        'county',
        'town',
        'village',
        'count'
    ];

    protected $guarded = [];

        
}