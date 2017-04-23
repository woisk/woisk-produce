<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminalComComputerName
 */
class TerminalComComputerName extends Model
{
    protected $table = 'terminal_com_computer_name';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}