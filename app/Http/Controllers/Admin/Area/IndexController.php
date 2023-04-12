<?php

namespace App\Http\Controllers\Admin\Area;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lead\FilterRequest;
use App\Models\Area;
use App\Models\Lead;
use Illuminate\Http\Request;



class IndexController extends Controller
{
    public function __invoke(){
        $areas = Area::all();
        $leads = Lead::all();
        return view('admin.area.index',compact( 'areas','leads'));
    }
}
