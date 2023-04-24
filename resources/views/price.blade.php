@extends('layouts.main')

@section('title')
    Стоимость услуги
@endsection

@section('content')
    <section class="form cid-rR7qEDwb4F" id="header3-1" style="background-image: url({{asset('public/images/primage.jpg')}})">
        <div class="mbr-overlay"></div>
        <div class="container">
            <div class="row">
                <h1 class="mbr-section-title mbr-regular align-left mbr-fonts-style mbr-white display-2">Стоимость услуг лазерной эпиляции</h1>
            </div>
        <div class="whiteArea">
            <div class="row">
                <div class="col-lg-3 text-dark text-bold font-italic text-sm-center display-5">
                    Зона
                </div>
                <div class="col-lg-3 text-dark text-bold font-italic display-5 text-sm-left ">
                    Цена на 1 посещение
                </div>
                <div class="col-lg-3 text-dark text-bold font-italic display-5 text-sm-left ">
                    Цена на 3 посещения
                </div>
                <div class="col-lg-3 text-dark text-bold font-italic display-5 text-sm-left ">
                    Цена на 6 посещений
                </div>
                @foreach($areas as $area)
                    <div class="col-lg-3 text-dark text-bold font-italic text-sm-left display-5 ">
                        <b>{{$area->name}}</b>
                    </div>
                    <div class="col-lg-3 text-dark text-bold font-italic display-5 text-lg-left text-sm-left ">
                        {{$area->price}} руб.
                    </div>
                    <div class="col-lg-3 text-dark text-bold font-italic display-5 text-lg-left text-sm-left ">
                        {{$area->price*3*0.90}} руб.
                    </div>
                    <div class="col-lg-3 text-dark text-bold font-italic display-5 text-lg-left text-sm-left ">
                        {{$area->price*6*0.85}} руб.
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

@endsection
