<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComUrl
 */
class ComUrl extends Model
{
    protected $table = 'com_url';

    public $timestamps = false;

    protected $fillable = [
        'descript',
        'link',
        'times'
    ];

    protected $guarded = [];

        
}