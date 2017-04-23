<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminalComBrowser
 */
class TerminalComBrowser extends Model
{
    protected $table = 'terminal_com_browser';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'kernel',
        'version',
        'count'
    ];

    protected $guarded = [];

        
}