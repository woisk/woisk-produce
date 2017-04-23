<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminalComSourceDomian
 */
class TerminalComSourceDomian extends Model
{
    protected $table = 'terminal_com_source_domian';

    public $timestamps = false;

    protected $fillable = [
        'url',
        'count'
    ];

    protected $guarded = [];

        
}