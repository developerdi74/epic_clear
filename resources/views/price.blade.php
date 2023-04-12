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
    <section class="page_container" id="">
        <table class="table table-dark">
            <thead>
            <tr>
                <td>№</td>
                <td>Название зоны</td>
                <td>Стоимость</td>
            </tr>
            </thead>
            <tbody>
            @foreach($areas as $area)
                <tr>
                    <th scope="col">{{$area->id}}</th>
                    <th scope="col">{{$area->name}}</th>
                    <th scope="col">{{$area->price}} руб.</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

@endsection
