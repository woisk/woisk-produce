<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComWork
 */
class UserComWork extends Model
{
    protected $table = 'user_com_work';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}