<?php

namespace App\Http\Controllers\Admin\Promotion;

use App\Http\Controllers\Controller;
use App\Models\Promotion;



class IndexController extends Controller
{
    public function __invoke(){
        $promos = Promotion::orderBy('id','desc')->get();
        return view('admin.promo.index',compact( 'promos'));
    }
}
