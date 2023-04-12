<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Lead;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }
    //
}
