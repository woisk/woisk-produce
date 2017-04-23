<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserLink
 */
class UserLink extends Model
{
    protected $table = 'user_link';

    protected $primaryKey = 'uid';

	public $timestamps = true;

    protected $fillable = [
        'link'
    ];

    protected $guarded = [];

        
}