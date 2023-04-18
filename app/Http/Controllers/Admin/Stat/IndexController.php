<?php

namespace App\Http\Controllers\Admin\Stat;

use App\Http\Controllers\Controller;
use App\Models\Statistics;



class IndexController extends Controller
{
    public function __invoke(){
        $stats = Statistics::orderBy('id','desc')->get();
        return view('admin.statistics.finance',compact( 'stats'));
    }
}
