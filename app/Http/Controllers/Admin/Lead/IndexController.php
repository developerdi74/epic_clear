<?php

namespace App\Http\Controllers\Admin\Lead;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lead\FilterRequest;
use App\Models\Area;
use App\Models\Lead;
use Illuminate\Http\Request;



class IndexController extends Controller
{
    public function __invoke(FilterRequest $request){
        $data = $request->validated();
        $query = Lead::query();

        if(isset($data['process'])){
            $query->where('process','like', "%{$data['process']}%");
            $leads = $query->orderBy('time', 'asc')->get();
        }else{
            $leads = $query->orderBy('id', 'desc')->get();
        }

        if(isset($data['phone'])){
            $query->where('phone','like', "%{$data['phone']}%");
            $leads = $query->orderBy('time', 'asc')->get();
        }

        if(isset($_GET['date'])){
            $time = date('Y-m-d',strtotime($_GET['date']));
            $query->where('time','like', "%{$time}%");
            $leads = $query->orderBy('time', 'asc')->get();
        }
        /*$leads = Lead::orderBy('id', 'desc')->paginate(2);*/
        $areas = Area::all();
        return view('admin.lead.index',compact('leads', 'areas'));
    }
}
