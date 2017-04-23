<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComBirthday
 */
class UserComBirthday extends Model
{
    protected $table = 'user_com_birthday';

    public $timestamps = false;

    protected $fillable = [
        'times',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}