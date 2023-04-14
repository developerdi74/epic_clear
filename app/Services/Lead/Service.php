<?php

namespace App\Services\Lead;


use App\Models\Lead;
class Service{

    public function index($data){

    }

    public function store($data){

        $ok=0;
        if(isset($data['area_id'])){
            $areas=$data['area_id'];
            unset($data['area_id']);
            $ok=1;
        }

        $lead = Lead::create($data);

        if($ok==1){
            $lead->area()->attach($areas);
        }
    }


    public function update($data, $lead){
        $ok=0;

        if(isset($data['area_id'])){
            $area = $data['area_id'];
            unset($data['area_id']);
            $ok=1;
        }

        $lead->update($data);
        if($ok==1){
            $lead = $lead->fresh();
            $lead->area()->sync($area);
        }
    }
}
