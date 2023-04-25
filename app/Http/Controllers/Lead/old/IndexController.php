<?php

namespace App\Http\Controllers\Lead\old;

use App\Http\Controllers\Lead\BaseController;
use App\Http\Requests\Lead\FilterRequest;
use App\Models\Area;
use App\Models\Lead;
class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request){


        $data = $request->validated();
        $query = Lead::query();

        if(isset($data['process'])){
            $query->where('process','like', "%{$data['process']}%");
        }
        $leads = $query->get();

        /*$leads = Lead::orderBy('id', 'desc')->paginate(2);*/
        $areas = Area::all();
        return view('lead.index', compact('leads', 'areas'));
    }
}
