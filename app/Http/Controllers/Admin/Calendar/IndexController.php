<?php

namespace App\Http\Controllers\Admin\Calendar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lead\FilterRequest;
use App\Models\Area;
use App\Models\Lead;
use Illuminate\Http\Request;



class IndexController extends Controller
{
    public function __invoke(){
        return view('admin.calendar.index');
    }
}
