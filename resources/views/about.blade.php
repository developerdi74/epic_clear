@extends('layouts.main')
@section('title')
    Информация
@endsection

@section('content')
    <section class="form cid-rR7qEDwb4F" id="header3-1" style="background-image: url({{asset('public/images/izobrazhenienog.png')}})">
        <div class="mbr-overlay"></div>
        <div class="container">
            <div class="row p-4">
                <div class="col-md-6">

                    <div class="col-md-12">
                        <h1 class="mbr-section-title mbr-regular align-left mbr-fonts-style mbr-white display-2">Контакты</h1>
                    </div>
                    <div class=" page_about">
                        <div class=""><span style="color:#b539cf">EPIC</span><span class="info_text">lean - лазерная эпиляция</span></div>
                        <div>График работы: <span class="info_text">Будние дни с 9:00 до 18:00</span></div>
                        <div>Телефон: <a class="info_text" href="tel:8 800 200 10 10">8 800 200 10 10</a></div>
                        <div>Адрес: <span class="info_text">г.Магнитогорск, ул. Ворошилова 15/1</span></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d595.0939109559159!2d58.984308909593096!3d53.37232798384378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d12e5036971ddb%3A0xb44fb8105e87dbbf!2z0YPQuy4g0JLQvtGA0L7RiNC40LvQvtCy0LAsIDE1LzEsINCc0LDQs9C90LjRgtC-0LPQvtGA0YHQuiwg0KfQtdC70Y_QsdC40L3RgdC60LDRjyDQvtCx0LsuLCA0NTUwNDU!5e0!3m2!1sru!2sru!4v1681275171270!5m2!1sru!2sru" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row certification">
               <div class="col-md-12">
                   <h1 class="mbr-section-title mbr-regular align-left mbr-fonts-style mbr-white display-2">Сертификаты</h1>
               </div>
               <div class="col-md-6 mb-4">
                   <h3 class="mbr-section-title mbr-regular align-left mbr-fonts-style mbr-white display-5">Сертификат специалиста лазерной эпиляции</h3>
                   <div class="page_about">
                       <img src="public/images/sert.jpg">
                   </div>
               </div>
                <div class="col-md-6 mb-4">
                    <h3 class="mbr-section-title mbr-regular align-left mbr-fonts-style mbr-white display-5">Декларация</h3>
                    <div class="page_about">
                        <img src="public/images/deklar.jpg">
                    </div>
                </div>
                <div class="col-md-12">
                    <h3 class="mbr-section-title mbr-regular align-left mbr-fonts-style mbr-white display-5">Сертификат диодного лазера Golden Black 1200w</h3>
                </div>
                <div class="col-md-6 mb-4">

                    <div class="page_about">
                        <img src="public/images/goldblack1.jpg">
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="page_about">
                        <img src="public/images/goldblack2.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
