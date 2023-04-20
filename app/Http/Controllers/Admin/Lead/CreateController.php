<?php

namespace App\Http\Controllers\Admin\Lead;

use App\Http\Controllers\Controller;
use App\Models\Area;

class CreateController extends BaseController
{
    public function __invoke(){
        $areas = Area::all();
        return view('admin.lead.create', compact('areas'));
    }
}
