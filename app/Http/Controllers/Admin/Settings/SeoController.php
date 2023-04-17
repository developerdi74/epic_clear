<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;
use App\Models\Area;



class SeoController extends Controller
{
    public function index(){
        $seos = Seo::all();
        $areas = Area::all();
        return view('admin.settings.seo',compact( 'seos','areas'));
    }
    public function store(Request $request){

        $data = $request->validate([
            'route' => '',
            'title' => '',
            'description' => '',
            'keywords' => '',
            'header' => '',
        ]);

        $seo = Seo::create($data);
        return redirect()->route('admin.seo.index');
    }
    public function update(Seo $seo, Request $request){
        $data = $request->validate([
            'route' => '',
            'title' => '',
            'description' => '',
            'keywords' => '',
            'header' => '',
        ]);
        $seo->update($data);

        return redirect()->route('admin.seo.index');
    }

    public function delete(Seo $seo){
        $seo->delete();
        return redirect()->route('admin.seo.index');
    }

}
