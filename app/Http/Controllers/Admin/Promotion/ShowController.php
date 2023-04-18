<?php

namespace App\Http\Controllers\Admin\Promotion;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Models\Statistics;



class ShowController extends Controller
{
    public function __invoke(User $user){
        $areas=Area::all();
        return view('admin.user.show',compact( 'user','areas'));
    }
}
