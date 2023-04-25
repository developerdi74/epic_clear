<?php

namespace App\Http\Controllers\Lead;

class TimeLoadController extends BaseController
{
    public function __invoke(){

        return view('lead.time');
    }
}
