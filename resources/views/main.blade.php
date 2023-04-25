@extends('layouts.main')

@section('title')
    Главная
@endsection

@section('content')

    <section class="form cid-rR7qEDwb4F" id="header3-1">

        <div class="mbr-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5 m-auto">
                    <div class="title">
                        <h1 class="mbr-section-title mbr-regular align-left mbr-fonts-style mbr-white display-2"><span style="color:#b539cf">Лазерная эпиляция</span> - новый способ получить идеально гладкую кожу надолго</h1>
                        <p class="mbr-section-subtitle align-left mbr-fonts-style mbr-white block-left display-7">Мы используем диодный лазер. Это последнее поколение оборудования для лазерной эпиляции, которое помогает убрать волосы на теле на 2−5 лет без дискомфорта и рисков для здоровья.

                            Забудьте о раздражении после бритья или походам в салон каждые две недели. Лазерная эпиляция подойдет для всех участков вашего тела. Руки, ноги, бикини, живот, спина, лицо — можно все! Наслаждайтесь безупречной гладкостью каждый день.</p>
                        <div class="mbr-section-btn align-left"><a class="btn btn-danger display-7" href="{{route('lead.create')}}">Запишись сегодня!</a></div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 my-auto pb-4 mbr-form" data-form-type="formoid">
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
                            <div data-for="time" class="col-lg-12 col-sm-12 form-group">
                                @include('lead.calendar')
                            </div>
                            <div data-for="time" class="time_block_select col-lg-12 col-sm-12 form-group d-none">
                                <div class="selectTime"></div>
                                <div class="selectDate"></div>
                                <input type="datetime-local" name="time" readonly value="{{ old('time') }}" placeholder="" class="form-control display-7 date_input d-none" id="form-date-input">
                            </div>
                            <div data-for="phone" class="col-lg-12 form-group">
                                <span>Зоны работы</span>
                            </div>
                            <div class="row">
                                @foreach($areas as $area)
                                    <div class="col-lg-6 form-group">
                                        <input type="checkbox" class="custom-checkbox" id="area_id_{{ $area->id }}" name='area_id[]' value="{{$area->id}}">
                                        <label for="area_id_{{ $area->id }}">{{$area->name}}({{$area->price}}&#8381;)</label>
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

    <section class="features1 cid-rR7ueeAa3a" id="features4-c">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 title-block">
                    <h2 class="mbr-section-title align-center mbr-bold mbr-fonts-style mbr-black  display-2">Преимущества диодного лазера</h2>


                </div>
            </div>


            <div class="media-container-row">
                <div class="card col-12 col-md-6 col-lg-4">
                    <div class="card-inner">
                        <div class="card-img align-center">
                            <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-contact-form mobi-mbri"></span>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title align-center mbr-bold mbr-fonts-style mbr-black display-5">Без боли и риска ожогов</h4>
                            <p class="mbr-text align-center mbr-fonts-style mbr-light mbr-black display-7">
                                Излучение действует только на волоски и не рассеивается по коже, поэтому она не нагревается. Это исключает риск ожогов. А сапфировая система охлаждения и защиты эпидермиса сводит неприятные ощущения к минимуму.</p>

                        </div>
                    </div>
                </div>

                <div class="card col-12 col-md-6 col-lg-4">
                    <div class="card-inner">
                        <div class="card-img align-center">
                            <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-rocket mobi-mbri"></span>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-black align-center mbr-bold mbr-fonts-style display-5">Подходит для тонких и светлых волос</h4>
                            <p class="mbr-text mbr-black align-center mbr-fonts-style mbr-light display-7">
                                В темных волосах меланина содержится гораздо больше, чем в светлых. Но диодный лазер «видит» и точечно воздействует на волоски даже с небольшой концентрацией меланина, поэтому подходит для светлых и рыжих волос.</p>

                        </div>
                    </div>
                </div>

                <div class="card col-12 col-md-6 col-lg-4">
                    <div class="card-inner">


                        <div class="card-img align-center">
                            <span class="mbr-iconfont mbr-iconfont-1 mobi-mbri-image-gallery mobi-mbri"></span>
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-black align-center mbr-bold mbr-fonts-style display-5">Глубоко воздействует на корни</h4>
                            <p class="mbr-text mbr-black align-center mbr-fonts-style mbr-light display-7">
                                Аппарат воздействует излучением длиной волны 808 нм. За счет этого энергия проникает даже в глубокие слои кожи, разрушая стержень волоса вместе с луковицей.</p>

                        </div>
                    </div>
                </div>



            </div>

        </div>

    </section>

    <section class="header8 cid-rR7qHdLpdl" id="content7-4">


        <div class="container-fluid align-center">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-6 m-auto left-block">
                    <div class="media-content">
                        <h1 class="mbr-section-title align-left mbr-bold mbr-white mbr-fonts-style display-2">О нашем аппарате Golden Black 1200W</h1>

                        <div class="mbr-section-text mbr-white">
                            <p class="mbr-text align-left mbr-fonts-style mbr-white display-7">Ключевое достоинство современных диодных лазеров заключается в возможности динамической работы, то есть непрерывного скольжения манипулы по телу. В аппарате заданы параметры, которые позволяют в ходе процедуры обрабатывать один участок кожи несколько раз. Чтобы на теле не появился термический ожог, косметолог учитывает объем аккумулированной в хромофорах энергии. Такая методика позволяет очень быстро провести эпиляцию одной зоны.
                            <br><br>Лазерное устройство использует длину волны 808 нм, что на 100 % гарантирует удаление любого волоса;<br>
                            Мощность манипулы - 1200w;
                             <br>На манипуле натуральный Сапфир;
                            </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mbr-white col-md-12 col-12 col-lg-6 video-block">
                    <div class="box">
                        <div class="mbr-media show-modal align-center py-2" data-modal=".modalWindow">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section info3 cid-rRwm0kP5Oj" id="info3-g">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-center">
                    <h2 class="mbr-fonts-style mbr-section-title mbr-bold mbr-black display-2">Акции</h2>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Для вашего внимания мы предлагаем интересные акции
                    </p>
                </div>
            </div>
        </div>
    </section>
@php
$promos = \App\Http\Controllers\Promo\IndexController::getPromo();
@endphp
    <section class="carousel slide testimonials-slider extTestimonials cid-rR7qIJLIwV" data-interval="false" id="slider4-7">
        <div class="container align-center">
            <div class="row">
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        @foreach($promos as $promo)
                        <div class="col-md-6 img-card col-lg-4">
                            <div class="img-block">
                                <div class="wrapper-img">
                                    <img src="{{$promo->image}}" width="380" height="260" alt="Акции на лазерную эпиляцию в Магнитогорске">
                                </div>
                                <div class="title-block align-left">
                                    <h5 class="desk mbr-fonts-style display-4">{{$promo->category}}</h5>
                                    <h4 class="mbr-fonts-style signature mbr-bold mbr-black display-5">{{$promo->title}}</h4>
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        {{$promo->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->

    </section>

    <section class="cid-rR7qJ5VtJv" id="content5-8">

        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);"></div>
        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-12 col-lg-12">
                    <h1 class="mbr-section-title mbr-semibold pb-3 mbr-fonts-style align-center display-2">Познакомься с процедурой</h1>
                    <p class="mbr-text mbr-fonts-style align-center display-5">
                        Информация о лазерной эпиляции, а также что необходимо знать для подготовки и её проведения</p>
                    <div class="mbr-section-btn align-center"><a class="btn btn-danger display-7" href="{{ route('info.index') }}">Перейти на страницу с информацией</a></div>
                </div>
            </div>
        </div>

    </section>


@endsection
