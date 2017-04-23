<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComMarriageState
 */
class UserComMarriageState extends Model
{
    protected $table = 'user_com_marriage_state';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count',
        'sort'
    ];

    protected $guarded = [];

        
}