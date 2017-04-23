<?php

Route::group(['middleware' => 'web', 'prefix' => 'terminal', 'namespace' => 'Modules\Terminal\Http\Controllers'], function()
{
    Route::get('/', 'TerminalController@index');
    Route::get('ip', 'TerminalController@ip');

});
