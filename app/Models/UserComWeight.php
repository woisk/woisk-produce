<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComWeight
 */
class UserComWeight extends Model
{
    protected $table = 'user_com_weight';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}