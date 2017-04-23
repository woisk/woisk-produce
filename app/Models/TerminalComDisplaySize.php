<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminalComDisplaySize
 */
class TerminalComDisplaySize extends Model
{
    protected $table = 'terminal_com_display_size';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}