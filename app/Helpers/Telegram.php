<?php

namespace App\Helpers;
use App\Models\Area;
use Illuminate\Support\Facades\Http;

class Telegram{

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
        //$chatID="-833812569";
        $chatID="-1001902571191";
        $myId = '1843117905';
        $botToken = "6087052425:AAEp5ywYJE0n33in0N3IrO7CXkKr4DIjiL0";
        $uriApi = 'https://api.telegram.org/bot';
        $method = '/sendMessage';
        $uri = $uriApi.$botToken.$method;
        $rez = Http::post($uri,[
            'chat_id' => $chatID,
            'text' => $message,
            'parse_mode' => 'html'
        ]);
    }

}
