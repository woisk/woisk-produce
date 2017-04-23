<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComBloodType
 */
class UserComBloodType extends Model
{
    protected $table = 'user_com_blood_types';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}