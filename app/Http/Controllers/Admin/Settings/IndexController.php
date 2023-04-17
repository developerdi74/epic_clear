<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lead\FilterRequest;
use App\Models\Seo;
use App\Models\Area;
use Illuminate\Http\Request;



class IndexController extends Controller
{
    public function __invoke(){
        $seos = Seo::all();
        $areas = Area::all();
        return view('admin.settings.seo',compact( 'seos','areas'));
    }
}
