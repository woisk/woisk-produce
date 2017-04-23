<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComZodiac
 */
class UserComZodiac extends Model
{
    protected $table = 'user_com_zodiac';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}