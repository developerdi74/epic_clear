@extends('layouts.main')

@section('title')
    Записи
@endsection

@section('content')
    <section class="form cid-rR7qEDwb4F lead_create_page" id="header3-1">
        <div class="mbr-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-form-type="formoid">
                    <form action="{{route('lead.store')}}" method="post" class="mbr-form form-with-styler" data-form-title="Form Name">
                        @csrf
                        @method('post')
                        @if(request()->get('success')==1)
                        <div class="form-row">
                            <div data-form-alert class="alert alert-success col-12">Спасибо! Заявка отправлена, мы перезвоним Вам!</div>
                        </div>
                        @endif
                        <div class="dragArea form-row">
                            <div class="col-lg-12 align-center">
                                <h5 class="mbr-fonts-style mbr-black display-5">Форма записи</h5>
                                <p class="mbr-section-subtitle mbr-section-subtitle align-center mbr-fonts-style text-form display-7">Выберите желаемые зоны, дату и время процедуры</p>
                            </div>
                            <div class="col-lg-12 form-group" data-for="name">
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Ваше имя" class="form-control display-7" id="Name-header3-1">
                                @error('name') <p class="error">Поле имя обязательно для заполнения</p> @enderror
                            </div>
                            <div data-for="phone" class="col-lg-12 form-group">
                                <input type="phone" name="phone" value="{{ old('phone') }}" placeholder="Телефон"class="form-control display-7" id="Email-header3-1">
                                @error('phone') <p class="error">Поле телефон обязательно для заполнения</p> @enderror
                            </div>
                            <div data-for="time" class="col-lg-8 col-sm-12 form-group">
                                @include('lead.calendar')
                                </div>
                            <div data-for="time" class="time_block_select col-lg-4 col-sm-12 form-group d-none">
                                <div class="selectTime"></div>
                                <div class="selectDate col-6"></div>
                                <input type="datetime-local" name="time" readonly value="{{ old('time') }}" placeholder="" class="form-control display-7 date_input d-none" id="form-date-input">
                            </div>
                            <div data-for="phone" class="col-lg-12 form-group">
                                <span>Зоны работы</span>
                            </div>
                            <div class="row">
                                @foreach($areas as $area)
                                <div class="col-lg-4 form-group">
                                    <input type="checkbox" class="custom-checkbox" id="area_id_{{ $area->id }}" name='area_id[]' value="{{$area->id}}">
                                    <label for="area_id_{{ $area->id }}">{{$area->name}} - стоимость: {{$area->price}} руб.</label>
                                </div>
                                @endforeach
                            </div>

                            <div data-for="message" class="col-lg-12 form-group">
                                <input type="text" name="message" placeholder="Дополнительная информация или вопрос" value="{{ old('message') }}" data-form-field="Website" class="form-control display-7" id="Website-header3-1">
                            </div>
                            <div class="col-auto form-btn">
                                <button type="submit" class="btn btn-danger link-btn display-7">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
