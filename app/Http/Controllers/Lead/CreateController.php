<?php

namespace App\Http\Controllers\Lead;

use App\Models\Area;
class CreateController extends BaseController
{
    public function __invoke(){

        $areas = Area::all();
        return view('lead.create', compact('areas'));
    }
}
