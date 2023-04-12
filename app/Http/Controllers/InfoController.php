<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
        return view('info');
    }
    //
}
