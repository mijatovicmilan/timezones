<?php

Route::get('timezones/{timezone?}',
    'Mijatovic\Timezones\TimezonesController@index');