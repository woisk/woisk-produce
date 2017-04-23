<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComEdu
 */
class UserComEdu extends Model
{
    protected $table = 'user_com_edu';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}