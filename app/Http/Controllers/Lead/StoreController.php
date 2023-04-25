<?php

namespace App\Http\Controllers\Lead;

use App\Helpers\Telegram;
use App\Http\Controllers\Controller;
use App\Http\Requests\Lead\StoreRequest;
use App\Models\Area;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;
class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){
        //Приходящие данные из формы
        $data = $request->validated(); //Реквест для валидации данных из формы StoreRequest
        if(isset($data['area_id'])){
            $areas = $data['area_id'];
        }else{
            $areas = '';
        }
        $this->service->store($data);
        $telegram = new Telegram;
        $telegram->sendTelegram($data, $areas);
        $success = 1;
        return redirect()->route('info.index', compact('success'));
    }

}
