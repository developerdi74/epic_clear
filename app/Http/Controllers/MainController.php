<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Lead;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\TestController;

class MainController extends Controller
{
    public function index(){

       // $this->authorize('view', auth()->user()); //Полиция для доступа админа - регистрируется в провайдерах

        $users = User::all();
        $areas = Area::all();
        return view('main', compact('users','areas'));
    }
    //
}
