<?php

namespace App\Http\Controllers\Promo;

use App\Http\Controllers\Controller;
use App\Models\Promotion;



class IndexController extends Controller
{
    public static function getPromo(){
        $promos = Promotion::where('active',1)->orderBy('id','desc')->take(3)->get();
        return $promos;
    }
}
