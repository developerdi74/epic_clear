<?php

namespace App\Http\Controllers\Lead;

use App\Models\Area;
use Illuminate\Support\Facades\Http;
class CreateController extends BaseController
{
    public function __invoke(){

        $areas = Area::all();
        return view('lead.create', compact('areas'));
    }

}
