<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;



class CalendarController extends Controller
{
    public static function Calendar(){
        return view('lead.calendar');
    }
}
