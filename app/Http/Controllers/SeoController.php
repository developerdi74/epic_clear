<?php

namespace App\Http\Controllers;

use App\Models\Seo;

class SeoController extends Controller
{
    public static function getSeo($page){
        $seos = Seo::where('route','like', $page)->first();
        if($seos==null){
            $seos = Seo::where('route','like', '/')->first();
        }
        return $seos;
    }
    //
}
