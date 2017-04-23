<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserDomicile
 */
class UserDomicile extends Model
{
    protected $table = 'user_domicile';

    public $timestamps = true;

    protected $fillable = [
        'uid',
        'domicile',
        'address'
    ];

    protected $guarded = [];

        
}