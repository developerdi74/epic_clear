    @php
        /* = \App\Models\Lead::where('process','new')->orWhere('process','success')->get();
		foreach($leads as $lead){
			$leadsData[date('Y-m-d', strtotime($lead->time))] = $lead->process;
		}*/
		//dd($leadsData);
        $monthes = array("s","Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь");
        $nmWeek = array("ВС","ПН","ВТ","СР","ЧТ","ПТ","СБ");
            $dayNow = date('d', time());
            $countDays = cal_days_in_month(CAL_GREGORIAN, date('m', time()), date('y', time()));
            $monthNow = date('m', time());
            $yearNow = date('y', time());
			$dayday = date('d', time());
			$activeMonth = 1;
    @endphp
    <label for="calendarSlider">Желаемая дата:</label>
<div id="calendarSlider" class="carousel slide" data-ride="carousel" data-interval="false">
<div class="carousel-inner">
        <? for($month=$monthNow;$month<=12;$month++): //месяц
            $countDays=cal_days_in_month(CAL_GREGORIAN, $month, date('y', time()));
            $prevOK=0;
            $week=0;
            if($month==1){
                $prevMonth=12;
                $prev_year=1;
            }
            else{
                $prevMonth=$month-1;
                $prev_year=0;
            }
            $prevMonthDays=cal_days_in_month(CAL_GREGORIAN, $prevMonth, date('y', time())-$prev_year);
            ?>
<div class="carousel-item {{($activeMonth==1)? 'active' : ''}}">
<?$activeMonth=0?>

        <div tabindex="0" data-month="" aria-roledescription="Calendar" class="b-calendar-grid form-control h-auto text-center" id="">
            <div class="b-calendar-grid-caption text-center font-weight-bold" id="" aria-live="polite" aria-atomic="true">
                    <?=$monthes[ltrim($month, '0')]; ?>
            </div>
            <div aria-hidden="true" class="b-calendar-grid-weekdays row no-gutters border-bottom">
                @foreach($nmWeek as $nameDay)
                    <small title="воскресенье" aria-label="воскресенье" class="col text-truncate">{{$nameDay}}</small>
                @endforeach
            </div>
            <div class="b-calendar-grid-body">
                    <? for($day=1;$day<=$countDays;$day++): //день ?>
                    <? $keyDate = date('Y-m-d', strtotime($yearNow."-".$month.'-'.$day));
                     $dayday=date('w', strtotime($keyDate));
                    if($prevOK==0){
                        $week=$dayday-1;
                    }
                    if($prevOK==0 && $dayday==00){
                        $prevOK=1;
                        $week=0;
                    }
					?>

                    <? if($week==0 || $prevOK==0): ?>
                        <div class="row no-gutters">
                    <? endif; ?>

                        <? if($dayday!=0 && $prevOK==0 && $day!=$countDays): ?>
                        <? $prevOK=1;?>
                        <? for($prevMonthDay=$prevMonthDays-$week; $prevMonthDay<=$prevMonthDays; $prevMonthDay++):?>
                        <div id="" class="col p-0">
                        <span class="btn p-0 border-0 rounded-circle text-nowrap text-dark disabled font-weight-bold"><?=$prevMonthDay?></span>
                        </div>
                    </a>
                    <? endfor; $week=$dayday+1; else: $week++; endif; ?>

                  <div id="" role="button" data-date="{{$keyDate}}" aria-label=""
                      class="col p-0 addSaveDate">
                          <span class="btn p-0 border-0 rounded-circle text-nowrap  text-dark font-weight-bold"><?=$day?></span>
                  </div>

                        <? if($day==$countDays && $week<=6):
                        $asda=$week; ?>
                        <? for($nextMonthDay=1; $nextMonthDay<=(7-$asda); $nextMonthDay++): ?>
                            <div class="col p-0">
                                 <span class="btn p-0 border-0 rounded-circle text-nowrap text-dark disabled font-weight-bold"><?=$nextMonthDay?></span>
                            </div>
                        <? $week++; endfor; ?>
                    <? endif;?>

                        <? if($week>=7 || $day==$countDays):
                        echo "</div>"; //<div class="row no-gutters">
                        $week=0;
                    endif; ?>
                    <? endfor; //день
                        ?>
                </div>
            </div>
</div>
            <? endfor; //месяц?>
</div>
    <a class="carousel-control-prev" href="#calendarSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Пр</span>
    </a>
    <a class="carousel-control-next" href="#calendarSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
