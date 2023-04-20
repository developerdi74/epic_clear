@php
    $leads = \App\Models\Lead::where('process','new')->orWhere('process','success')->get();
	foreach($leads as $lead){
		$leadsData[date('Y-m-d', strtotime($lead->time))][] = date('H:i', strtotime($lead->time));
	}
	//dd($leadsData);
	//dd($leadsData);
    $monthes = array("s","Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь");
    $nmWeek = array("ВС","ПН","ВТ","СР","ЧТ","ПТ","СБ");
        $dayNow = date('d', time());
        $countDays = cal_days_in_month(CAL_GREGORIAN, date('m', time()), date('y', time()));
        $monthNow = date('w', time());
        $yearNow = date('y', time());
		$dayday = date('w', );

		$activeMonth = 1;

		$startData = 8;

@endphp
<label for="selectTime">Желаемое время:</label>
<select value="time" id="selectTime" class="form-select select_hidden">
    <? for($hour = $startData; $hour<=$startData+12; $hour++): ?>
        <option value="{{$hour}}" {{($hour == 8) ? "selected" : '' }} >{{ $hour }}:00</option>
    <? endfor;?>
</select>
