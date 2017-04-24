<?php

namespace Mijatovic\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller {

    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezones::welcome', compact('current_time'));
    }

}