<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComUrlLink
 */
class ComUrlLink extends Model
{
    protected $table = 'com_url_link';

    public $timestamps = false;

    protected $fillable = [
        'url',
        'count'
    ];

    protected $guarded = [];

        
}