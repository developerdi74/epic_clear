<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Lead;

class ShowController extends BaseController
{
    public function __invoke(Lead $lead){
        $areas = Area::all();
        return view('lead.show', compact('lead', 'areas'));
    }
}
