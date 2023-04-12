<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lead\StoreRequest;
use App\Http\Requests\Lead\UpdateRequest;
use App\Models\Area;
use App\Models\Lead;
class LeadController extends Controller
{
    public function index(){
//        $area = Lead::all();
//        dd($area);
        $leads = Lead::all();
        $areas = Area::all();
        return view('lead.index', compact('leads', 'areas'));
    }


    public function create(){
        $areas = Area::all();
        return view('lead.create', compact('areas'));
    }


    public function store(StoreRequest $request){
        //Приходящие данные из формы
        $data = $request->validate(); //Реквест для валидации данных из формы StoreRequest
        $areas = $data['area_id'];
        unset($data['area_id']);
       // dd($data,$areas);

        $lead = Lead::create($data);

        $lead->area()->attach($areas);
        /* foreach($areas as $area){
           AreaLead::firstOrCreate([ //если будут похожие записи не создаст
                'lead_id'=>$lead->id,
                'area_id'=>$area,
            ]);
        }*/
        return redirect()->route('lead.index');
    }


    public function edit(Lead $lead){
        $areas = Area::all();
        return view('lead.edit', compact('lead','areas'));
    }


    public function show(Lead $lead){
        return view('lead.show', compact('lead'));
    }


    public function update(Lead $lead, UpdateRequest $request){
        $data = $request->validate();
        $area = $data['area_id'];
        unset($data['area_id']);
        $lead->update($data);
        $lead = $lead->fresh();
        $lead->area()->sync($area);
        return redirect()->route('lead.show', $lead->id);
    }

    public function destroy(Lead $lead){
        //$post = Lead::withTrashed()->find(4);//восстановить
        //$post->restore();
        $lead->delete();
        return redirect()->route('lead.index');
    }
    //
}
