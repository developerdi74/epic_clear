<?php

namespace App\Http\Controllers\Lead\old;

use App\Http\Controllers\Lead\BaseController;
use App\Models\Area;
use App\Models\Lead;
class EditController extends BaseController
{
    public function __invoke(Lead $lead){
        $areas = Area::all();
        return view('lead.edit', compact('lead','areas'));
    }
}
