<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComSex
 */
class UserComSex extends Model
{
    protected $table = 'user_com_sex';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}