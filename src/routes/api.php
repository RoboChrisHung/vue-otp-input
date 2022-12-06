<?php

Route::get(config('jp_postal_code.endpoint'), 'Chiehting\LaravelJpPostalCode\App\Http\Controllers\JpPostalCodeController@index');
