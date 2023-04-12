<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        $areas = Area::all();
        return view('price',compact('areas'));
    }
    //
}
