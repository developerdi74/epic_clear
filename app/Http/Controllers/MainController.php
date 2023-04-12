<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Lead;
use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
    public function index(){
        $users = User::all();
        $areas = Area::all();
        return view('main', compact('users','areas'));
    }
    //
}
