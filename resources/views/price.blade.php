@extends('layouts.main')

@section('title')
    Стоимость услуги
@endsection

@section('content')
    <section class="form cid-rR7qEDwb4F" id="header3-1">
        <div class="mbr-overlay"></div>
        <div class="container">
            <div class="row">
                <h1 class="mbr-section-title mbr-regular align-left mbr-fonts-style mbr-white display-2">Стоимость услуг лазерной эпиляции</h1>
            </div>
        </div>
    </section>
    <section class="page_container">
        <div class="row">
            <div class="col-lg-3 text-light text-bold font-italic text-sm-center display-5 border_bottom_epic">
                Зона
            </div>
            <div class="col-lg-3 text-white text-bold font-italic display-5 text-sm-center border_bottom_epic">
                Цена на 1 посещение
            </div>
            <div class="col-lg-3 text-white text-bold font-italic display-5 text-sm-center border_bottom_epic">
                Цена на 3 посещения
            </div>
            <div class="col-lg-3 text-white text-bold font-italic display-5 text-sm-center border_bottom_epic">
                Цена на 6 посещений
            </div>
            @foreach($areas as $area)
                <div class="col-lg-3 text-light text-bold font-italic text-sm-center display-5 border_bottom_epic">
                    {{$area->name}}
                </div>
                <div class="col-lg-3 text-white text-bold font-italic display-5 text-lg-center text-sm-center border_bottom_epic">
                    {{$area->price}} руб.
                </div>
                <div class="col-lg-3 text-white text-bold font-italic display-5 text-lg-center text-sm-center border_bottom_epic">
                    {{$area->price*3*0.90}} руб.
                </div>
                <div class="col-lg-3 text-white text-bold font-italic display-5 text-lg-center text-sm-center border_bottom_epic">
                    {{$area->price*6*0.85}} руб.
                </div>
            @endforeach
        </div>
    </section>

@endsection
