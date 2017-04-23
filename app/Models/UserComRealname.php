<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserComRealname
 */
class UserComRealname extends Model
{
    protected $table = 'user_com_realname';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'pinyin',
        'count',
        'sort',
        'initial'
    ];

    protected $guarded = [];

        
}