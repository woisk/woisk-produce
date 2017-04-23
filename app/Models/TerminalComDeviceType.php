<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminalComDeviceType
 */
class TerminalComDeviceType extends Model
{
    protected $table = 'terminal_com_device_type';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'count'
    ];

    protected $guarded = [];

        
}