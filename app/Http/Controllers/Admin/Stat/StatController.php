<?php

namespace App\Http\Controllers\Admin\Stat;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Area;
use App\Models\Statistics;



class StatController extends Controller
{
    public function index(){
        $stats = Statistics::all();
        $areas = Area::all();
        return view('admin.statistics.finance',compact( 'stats','areas'));
    }

    public static function store(Request $request){

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
