<?php

namespace App\Http\Controllers\Lead;

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
        self::sendTelegram($data, $areas);
        $success = 1;
        return redirect()->route('info.index', compact('success'));
    }
    public function sendTelegram($data, $areas){
        $areasTxt='';
        foreach($areas as $area){
            $nameArea = Area::find($area);
            $areasTxt = $areasTxt.$nameArea->name.",";
        }
        $message = "<b>Новая заявка</b>!
        \nОт: <b>$data[name]</b>
        \nТелефон: <b>$data[phone]</b>
        \nЗоны: <b>$areasTxt</b>
        \nДата: <b>$data[time]</b>
        \nСообщение: <b>$data[message]</b>
        \nСсылка на Лид: ".route('admin.lead.index',['process'=>'new']);
        $chatID="-833812569";
        $myId = '1843117905';
        $botToken = "6087052425:AAEp5ywYJE0n33in0N3IrO7CXkKr4DIjiL0";
        $uriApi = 'https://api.telegram.org/bot';
        $method = '/sendMessage';
        $uri = $uriApi.$botToken.$method;
        Http::post($uri,[
            'chat_id' => $chatID,
            'text' => $message,
            'parse_mode' => 'html'
        ]);
    }
}
