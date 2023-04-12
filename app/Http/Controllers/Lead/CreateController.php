<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Lead;

class CreateController extends BaseController
{
    public function __invoke(){
        $areas = Area::all();
        return view('lead.create', compact('areas'));
    }
}
