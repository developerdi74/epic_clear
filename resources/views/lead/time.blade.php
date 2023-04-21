@php
    $getDate=$_GET['day'];
        //$leads = \App\Models\Lead::where('time','like',"$getDate%")->where('process','new')->orWhere('process','success')->get();
        $leads = \App\Models\Lead::where('time','like',"$getDate%")->where(function($query){
			return $query->where('process','new')->orWhere('process','success');
        })->get();
        foreach($leads as $lead){
            //$leadsData[date('Y-m-d', strtotime($lead->time))][] = date('H:i', strtotime($lead->time));
            $leadsData[] = date('H:i', strtotime($lead->time));
        }
        $monthes = array("s","Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь");
        $nmWeek = array("ВС","ПН","ВТ","СР","ЧТ","ПТ","СБ");
            $dayNow = date('d', time());
            $countDays = cal_days_in_month(CAL_GREGORIAN, date('m', time()), date('y', time()));
            $monthNow = date('m', time());
            $yearNow = date('y', time());
            $dayday = date('d', time());

            $activeMonth = 1;

            $startData = 8;
//dump($leadsData);


@endphp
<label for="selectTime">Желаемое время:</label>
<select value="time" id="selectTime" class="form-select select_hidden mb-2" data-day="<?=$getDate?>">
    <? for($hour = $startData; $hour<=$startData+12; $hour++): if($hour<10) $getHour ="0".$hour; else $getHour=$hour;?>
        <option
            @if(isset($leadsData))
                {{ in_array("$getHour:00",$leadsData) ? 'disabled':'' }}
          @endif
        value="{{$hour}}" {{($getHour == '08') ? "selected" : '' }} >{{ $getHour }}:00</option>
    <? endfor;?>
</select>
