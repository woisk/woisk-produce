<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminalComIp
 */
class TerminalComIp extends Model
{
    protected $table = 'terminal_com_ip';

    public $timestamps = false;

    protected $fillable = [
        'ip_info',
        'city',
        'count'
    ];

    protected $guarded = [];

        
}