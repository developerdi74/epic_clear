<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Models\Statistics;



class IndexController extends Controller
{
    public function __invoke(){
        $areas=Area::all();
        $users = User::all();
        return view('admin.user.index',compact( 'users','areas'));
    }
    public static function store(Request $request){
        dd($request);
        $data = $request->validate([
            'type' => '',
            'summa' => '',
            'label' => '',
        ]);

        $seo = Statistics::create($data);
        return redirect()->route('admin.statistics.finance');
    }
    public function update(Statistics $stat, Request $request){
        $data = $request->validate([
            'type' => '',
            'summa' => '',
            'label' => '',
        ]);
        $Lead->update($data);

        return redirect()->route('admin.statistics.finance');
    }

    public function delete(Statistics $stat){
        $Lead->delete();
        return redirect()->route('admin.statistics.finance');
    }

}
