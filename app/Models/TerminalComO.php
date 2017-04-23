<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminalComO
 */
class TerminalComO extends Model
{
    protected $table = 'terminal_com_os';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'version',
        'count'
    ];

    protected $guarded = [];

        
}