<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Lead;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Area $areas, Lead $leads){
        return view('about',compact('areas','leads'));
    }
    //
}
