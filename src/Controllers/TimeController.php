<?php

namespace msprj\timeprj\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TimeController extends Controller
{
    /*
     *   return current Time
    */
    public function showTime()
    {
        $timezone = config('MyConfig.tehran');
        $time= Carbon::now()->setTimezone($timezone)->toTimeString();
        return view('MyView::time')->with('time',$time);

    }
    /*
     * return current Date
     */
    public function showDate()
    {
        $date=Carbon::now()->toDatestring();
        return view('MyView::date')->with('date',$date);

    }
}

