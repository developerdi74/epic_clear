$(window).on('load', function(){

    $(document).on('click','.card-header', function(){
        activlead = $(this).parent().find('.lead_window');
        if(activlead.hasClass('d-none')){
            activlead.removeClass('d-none');
        }else{
            activlead.addClass('d-none');
        }
    })
    var daySelect;
    //$(".addSaveDate").on('click', function(){
    $(document).on('click','.addSaveDate', function(){
        var date = $(this).attr('data-date');
        $('.addSaveDate').removeClass('epic');
        $(this).addClass('epic');
        $('.time_block_select').removeClass('d-none');
        daySelect = date;
        $('.date_input').val(date+' 00:00');

        $.ajax({
            url: '/lead/time',         /* Куда отправить запрос */
            method: 'get',             /* Метод запроса (post или get) */
            dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
            data: {day: daySelect},     /* Данные передаваемые в массиве */
            success: function(data){
                $('.selectTime').html(data);/* функция которая будет выполнена после успешного запроса.  */
                $('.select_hidden').styler(); /* В переменной data содержится ответ от index.php. */
            }
        });

    });

    //$(".jq-selectbox__dropdown li").on('click', function(){

    $(document).on('click','.jq-selectbox__dropdown li', function(){
        if($(this).hasClass('disabled')){
            return false;
        }
        var timeSelect = $(this).html();
        dateSelect = daySelect+' '+timeSelect;
        $('.date_input').val(dateSelect);

        $('.selectDate').html('Выбранная дата: ');
        $('.date_input').removeClass('d-none');
        console.log(dateSelect);
    });


});

//смена сладов смахом пальцев
$(".carousel").on("touchstart", function (event) {
    var xClick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove", function (event) {
        var xMove = event.originalEvent.touches[0].pageX;
        if (Math.floor(xClick - xMove) > 5) {
            $(this).carousel('next');
        }
        else if (Math.floor(xClick - xMove) < -5) {
            $(this).carousel('prev');
        }
    });
    $(".carousel").on("touchend", function () {
        $(this).off("touchmove");
    });
});
var xClick;
var mouseDown;
$(".carousel").on("mousedown", function (event) {
    xClick = event.pageX;
    mouseDown = true;
});
$(".carousel").on("mousemove", function (event) {
    if (mouseDown) {
        var xMove = event.pageX;
        if (Math.floor(xClick - xMove) > 5) {
            $(this).carousel('next');
        }
        else if (Math.floor(xClick - xMove) < -5) {
            $(this).carousel('prev');
        }
    }
});
$(".carousel").on("mouseup", function (event) {
    mouseDown = false;
});
//смена сладов смахом пальцев

///////Маска телефона
$(document).ready(function () {
    $("#Email-header3-1").inputmask({"mask": "+7(999)999-99-99"});
    $("#yourEmail-contacts1-9").inputmask({"mask": "+7(999)999-99-99"});
    $("input[name=phone]").inputmask({"mask": "+7(999)999-99-99"});
    //$("#phone").inputmask({"mask": "+7(999)999-99-99"});

    $('.mbr-form').submit(function(){
        ym(93338247,'reachGoal','add_lead')
    })
});
