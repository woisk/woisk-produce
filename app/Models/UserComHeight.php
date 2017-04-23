<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComHeight
 */
class UserComHeight extends Model
{
    protected $table = 'user_com_height';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}