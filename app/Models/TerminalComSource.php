<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminalComSource
 */
class TerminalComSource extends Model
{
    protected $table = 'terminal_com_source';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}