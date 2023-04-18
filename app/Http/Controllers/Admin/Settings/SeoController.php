<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;



class SeoController extends Controller
{
    public function index(){
        $seos = Seo::all();
        return view('admin.settings.seo',compact( 'seos'));
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
