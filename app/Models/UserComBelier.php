<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComBelier
 */
class UserComBelier extends Model
{
    protected $table = 'user_com_belier';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}