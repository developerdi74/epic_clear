@php
   $seo = \App\Http\Controllers\SeoController::getSeo(request()->path());
@endphp
<!DOCTYPE html><html>
<head>
    <!-- Site made with Mobirise Website Builder v4.11.7, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.11.7, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>{{ $seo->title }} | EPIClean</title>
    <meta name="description" content="{{ $seo->description }}">
    <meta name="keywords" content="{{ $seo->keywords }}">
    <link rel="stylesheet" href="{{asset('public/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/mobirise2.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/mobirise-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/jquery.formstyler.theme.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">
    <!---
    <link rel="preload" as="style" href="asset('assets/mobirise/css/mbr-additional.css')">
    <link rel="stylesheet" href="{{asset('public/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/recaptcha.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/jquery.formstyler.css')}}">
    -->
    <link rel="stylesheet" href="{{asset('public/css/mbr-additional.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/css/mystyle.css')}}">

</head>
<body>

<!-- header-->
<section class="menu cid-rR7qDAC8K6" once="menu" id="menu1-0">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
            <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-2" href="{{ route('home.index') }}">
            <d style="color:#b539cf">EPIC</d>lean</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ route('home.index') }}">
                            Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ route('lead.create') }}">
                            Записаться</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ route('info.index') }}">
                            Информация о процедуре</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ route('price.index') }}">
                            Цены</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="{{ route('about.index') }}">
                            Контакты</a>
                    </li>
                    @if(auth()->user()==null)
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="{{ route('home') }}">
                                Войти</a>
                        </li>
                    @endif
                    @can('view', auth()->user())
                        <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="{{ route('admin.calendar.index') }}">
                                Панель</a>
                        </li>
                    @endcan
                    @if(auth()->user()!=null)
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                                <input type="submit" class="nav-link link text-white display-4 btn-logout" value="Выйти">
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- end header-->

<!-- main contrainer-->
<section class="main_container">
@yield('content')
<!-- foooooter --->
</section>
<section class="form cid-rR7qJEV8vo" id="contacts1-9">


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="media-content">
                    <h1 class="mbr-section-title align-left mbr-bold mbr-white  mbr-fonts-style display-2">Остались вопросы?</h1>
                    <h3 class="mbr-section-subtitle mbr-bold align-left mbr-fonts-style display-7">Оставь онлайн заявку, мы перезвоним и проконсультируем</h3>
                    <div class="mbr-section-text mbr-black">
                        <p class="mbr-text align-left mbr-fonts-style display-7">Лазерная эпиляция, что это, как происходит, какие есть виды, что нужно перед процедурой, а также противопоказания, Вы можете узнать на <a href="{{route('info.index')}}">этой странице</a></p>
                    </div>
                    <div class="social-list">
                        <a href="https://vk.com/epicleanmgn" target="_blank">
                            <span class="socicon-vkontakte socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="https://instagram.com/epicleanmgn?igshid=ZDdkNTZiNTM=" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="https://t.me/Epicleanmgn" target="_blank">
                            <span class="socicon-telegram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="" target="_blank">

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 mx-auto mbr-form" data-form-type="formoid">
                <!--Formbuilder Form-->
                <form action="{{route('lead.store')}}" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    @csrf
                    @method('post')
                    @if(request()->get('success')==1)
                        <div class="form-row">
                            <div data-form-alert class="alert alert-success col-12">Спасибо! Заявка отправлена, мы перезвоним Вам!</div>
                        </div>
                    @endif
                    <div class="dragArea form-row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Введите имя" data-form-field="yourName" class="form-control text-multiple" value id="yourName-contacts1-9">
                                </div>
                                <div class="col-lg-6  email-input">
                                    <input type="text" name="phone" placeholder="Введите телефон" data-form-field="yourEmail" class="form-control text-multiple" value id="yourEmail-contacts1-9">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="message">
                            <textarea name="message" placeholder="Ваше сообщение" data-form-field="yourMessage" class="form-control display-7" id="yourMessage-contacts1-9"></textarea>
                        </div>
                        <div class="col-lg-6  email-input">
                            <input type="hidden" name="process" placeholder="Введите телефон" data-form-field="yourEmail" class="form-control text-multiple" value="update" id="yourEmail-contacts1-9">
                        </div>
                        <div class="form-btn"><button type="submit" class="btn btn-danger display-4">Отправить</button></div>
                    </div>
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>

<section once="footers" class="cid-rR7waZseAp" id="footer1-d">

    <div class="container">
        <div class="row">
            <div class="media-container-row mbr-white col-lg-12">
                <div class="row-copirayt col-sm-12 col-md-12 col-lg-6">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-left display-7">
                        2023 © <a href class="link mbr-white"></a> - Все права защищены
                    </p>
                </div>
                <div class="row-links col-md-12 col-lg-6">
                    <ul class="foot-menu">
                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <a class="text-white" href="#" target="_blank">О нас</a>
                        </li>
                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <a class="text-white" href="#" target="_blank">Политика конфиденциальности
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('public/js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/js/navbar-dropdown.js')}}"></script>
<script src="{{asset('public/js/jquery.touch-swipe.min.js')}}"></script>
<script src="{{asset('public/js/jquery.formstyler.min.js')}}"></script>
<script src="{{asset('public/js/script.js')}}"></script>
<script src="{{asset('public/js/main.js')}}"></script>
<!---
<script src="{{asset('public/js/popper.min.js')}}"></script>
<script src="{{asset('public/js/jquery.datetimepicker.full.js')}}"></script>
<script src="{{asset('public/js/smooth-scroll.js')}}"></script>
<script src="{{asset('public/js/nav-dropdown.js')}}"></script>
<script src="{{asset('public/js/mbr-testimonials-slider.js')}}"></script>
<script src="{{asset('public/js/tether.min.js')}}"></script>
<script src="{{asset('public/js/jquery.formstyler.js')}}"></script>
<script src="{{asset('public/js/bootstrap-carousel-swipe.js')}}"></script>
--->
</body>
</html>

