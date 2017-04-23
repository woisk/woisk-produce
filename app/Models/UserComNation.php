<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComNation
 */
class UserComNation extends Model
{
    protected $table = 'user_com_nation';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}