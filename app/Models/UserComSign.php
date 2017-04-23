<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComSign
 */
class UserComSign extends Model
{
    protected $table = 'user_com_sign';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}