<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TerminalComSourceParam
 */
class TerminalComSourceParam extends Model
{
    protected $table = 'terminal_com_source_param';

    protected $primaryKey = 'domian';

	public $timestamps = false;

    protected $fillable = [
        'domian',
        'param',
        'times'
    ];

    protected $guarded = [];

        
}