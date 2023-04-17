<?php

namespace App\Http\Controllers\Admin\Lead;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lead\UpdateRequest;
use App\Http\Controllers\Admin\Lead\BaseController;
use App\Models\Lead;
use App\Http\Controllers\Admin\Stat\StatController;
use App\Http\Controllers\Admin\Settings\RegisterController;
use App\Models\Statistics;
class UpdateController extends BaseController
{
    public function __invoke(Lead $lead, UpdateRequest $request){
        $data = $request->validated();
        if($data['process']==='complite'){
            $user = RegisterController::create($data);
            $dataStat = [
                'type' => 'lead',
                'summa' => $data['summa'],
                'user_id' => $user->id,
            ];
            $order = Statistics::create($dataStat);
        }
        if(isset($data['summa'])){
            unset($data['summa']);
        }
        $this->service->update($data, $lead);

        return redirect()->route('admin.lead.index', $lead->id);
    }
}


/*        */
