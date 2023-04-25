@extends('layouts.main')

@section('title')
    Информация о лазерной эпиляции
@endsection

@section('content')
    <section class="form cid-rR7qEDwb4F" id="header3-1"  style="background-image: url({{asset('public/images/vse-o-lazernoj-epilyacii.jpg')}})">
        <div class="mbr-overlay"></div>
        <div class="container">

            @if(request()->get('success')==1)
                <div class="form-row">
                    <div data-form-alert class="alert alert-success col-12">Спасибо! Заявка принята, обязательно ознакомьтесь с информацией по <a class = "fw-bold" href = '#preparation'>подготовке к лазерной эпиляции!</a>. В ближайшее время мы Вам перезвоним для подтверждения даты приема.</div>
                </div>
            @endif

            <div class="row">
                <h1 class="mbr-section-title mbr-regular align-left mbr-fonts-style mbr-white display-2">Вся информация о лазерной эпиляции</h1>
            </div>
            <a class = "link text-white display-4" href = '#preparation'>#Подготовка к процедуре</a>
            <a class = "link text-white display-4" href="#contraindications">#Противопоказания</a>
            <a class = "link text-white display-4" href="#skincare">#Уход за кожей</a>
        </div>
    </section>


    <section class="header8 cid-black" id="content7-4">
        <div class="container-fluid align-center">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-9 m-auto left-block">
                    <div class="media-content">
                        <h1 class="mbr-section-title align-left mbr-bold mbr-white mbr-fonts-style display-2">Какие способы удаления нежелательных волос существуют?</h1>
                        <div class="mbr-section-text mbr-white">
                            <p class="mbr-text align-left mbr-fonts-style mbr-white display-7">
                                Среди самых популярных методик — шугаринг (сахарная эпиляция), восковая эпиляция, электро- и фотоэпиляция, лазерная эпиляция.
                            <ul class="page_ul_info">
                                <li>
                                Восковая эпиляция и шугаринг — это механическое удаление волос. Волосяные фолликулы никак не затрагиваются, поэтому процедуру нужно повторять постоянно, примерно раз в 2-3 недели.
                                </li>
                                <li>
                                    Во время электроэпиляции на корень волоса воздействуют небольшим электрическим разрядом. Метод болезненный и очень медленный, ведь каждый волосок нужно обрабатывать отдельно.
                                </li>
                                <li>
                                Фотоэпиляция вызывает гибель фолликулов под влиянием световых волн. Недостаток технологии: разрушаются далеко не все волосяные луковицы, достаточно сложно получить идеально гладкую кожу.
                                </li>
                                <li>
                                В отличие от других методов лазерная эпиляция удаляет волосы быстро, комфортно и практически навсегда.
                                </li>
                            </ul>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cid-white header8" id="content7-4">
        <div class="container-fluid align-center">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-9 m-auto left-block">
                    <div class="media-content">
                        <h1 class="mbr-section-title align-left mbr-bold mbr-black mbr-fonts-style display-2">Как работает лазерная эпиляция волос?</h1>
                        <p class="mbr-section-text mbr-black">
                            <p class="mbr-text align-left mbr-fonts-style mbr-black display-7">Пигмент меланин, который содержится в волосяной луковице, притягивает и накапливает световую энергию лазера. Она преобразуется в тепловую энергию: фолликул нагревается и разрушается. Все, на этом месте волос больше расти не будет.<br>
                                В современных лазерных системах используется принцип селективного фототермолиза. В них подобрана такая длина световой волны, чтобы лазер затрагивал только волосяные фолликулы и не повреждал окружающие ткани — кожу, кровеносные сосуды, лимфоузлы.</p>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="header8 cid-black" id="content7-4">
        <div class="container-fluid align-center">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-9 m-auto left-block">
                    <div class="media-content align-left">
                        <h1 class="mbr-section-title align-left mbr-bold mbr-white mbr-fonts-style display-2">Преимущества использования диодного лазера</h1>

                        <div class="mbr-section-text mbr-white">
                            <p class="mbr-text align-left mbr-fonts-style mbr-white display-7">Если александритовым лазером рекомендуют эпилировать только светлую кожу, то диодный можно использовать как для светлой, так и для темной (причем для темных кожных покровов даже больше). То же самое и для волос – диодный лазерный аппарат прекрасно удаляет светлый и темный волосяной покров, причем сами волосы могут быть как тонкие, так и жесткие.
                                При диодной эпиляции оставшиеся на поверхности волосы во время процедуры не «сгорают», так как диодный лазер воздействует только на сосуд луковицы, которая питает волос, а также на саму луковицу.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cid-white header8" id="content7-4">
        <div class="container-fluid align-center">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-9 m-auto left-block">
                    <div class="media-content">
                            <a name = 'preparation'></a>
                            <h1 class="mbr-section-title align-left mbr-bold mbr-black mbr-fonts-style display-2">Подготовка к лазерной эпиляции</h1>
                            <p class="mbr-text align-left mbr-fonts-style mbr-black display-7">Для эффективного и безопасного проведения рекомендуется соблюдать следующие правила:</p>
                            <p class="mbr-text align-left mbr-fonts-style mbr-black display-7"><strong class="">В течение четырёх недель</strong> настоятельно не рекомендуется
                                <strong class="">загорать </strong>под прямыми лучами солнца и пользоваться средствами для
                                <strong class="">искусственного загара</strong>.</p>
                            <p class="mbr-text align-left mbr-fonts-style mbr-black display-7"><strong class="">За несколько дней</strong> до процедуры
                                <strong class="">необходимо сбрить волосы</strong> в зоне обработки лазером, чтобы исключить риск микро-ожогов.</p>
                            <p class="mbr-text align-left mbr-fonts-style mbr-black display-7"><strong class="">За неделю</strong> до процедуры необходимо прекратить использование
                                <strong class="">спиртосодержащих лосьонов, тоников и других косметологических средств</strong>.</p>
                            <p class="mbr-text align-left mbr-fonts-style mbr-black display-7"><strong class="">В день процедуры</strong> (если область процедуры касается лицевой части головы)
                                <strong class="">необходимо удалить с лица всю возможную косметику</strong>.</p>
                            <p class="mbr-text align-left mbr-fonts-style mbr-black display-7">
                                <strong class="">Рекомендуется </strong>также проводить процедуру за/через неделю <strong class="">после </strong>менструации для повышения болевого порога.</p></div>
                </div>
            </div>
        </div>
    </section>

    <section class="header8 cid-black" id="content7-4">
        <div class="container-fluid align-center">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-9 m-auto left-block">
                    <div class="media-content">
                        <h1 class="mbr-section-title align-left mbr-bold mbr-white mbr-fonts-style display-2">Особенности проведения процедуры</h1>

                        <div class="mbr-section-text mbr-white">
                            <p class="mbr-text align-left mbr-fonts-style mbr-white display-7">
                                Количество процедур с диодным лазером обычно больше, чем с использованием александритового или неодимового. Точное количество процедур и периодичность их проведения всегда определяет косметолог. В среднем, их может быть от 5 до 15.

                                Периодичность проведения сеансов – через каждые 30-60 дней (зависит от объема эпилируемых участков и интенсивности роста волос). Для того чтобы полностью удалить фолликулы на определенном участке кожи необходимо от 2 до 6 процедур.

                                В ходе эпиляции применяют специальный гель для охлаждения кожи, что повышает комфорт процедуры и делает её безболезненной. Что касается самой процедуры, то она ничем не отличается от эпиляции с применением других видов лазера.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cid-white header8" id="content7-4">
        <div class="container-fluid align-center">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-9 m-auto left-block">
                    <div class="media-content">
                        <a name = 'contraindications'></a>
                        <h1 class="mbr-section-title align-left mbr-bold mbr-black mbr-fonts-style display-2">Противопоказания</h1>
                        <div class="mbr-section-text mbr-black">
                            <p class="mbr-text align-left mbr-fonts-style mbr-black display-7">
                                Противопоказаниями к лазерной диодной эпиляции являются:
                            <ul class="page_ul_info">
                                <li>Беременность.</li><li>
                                Герпес.</li><li>
                                Псориаз.</li><li>
                                Фотодерматит.</li><li>
                                Варикозное расширение вен.</li><li>
                                Лейкоз.</li><li>
                                Туберкулез.</li><li>
                                Сахарный диабет.</li><li>
                                Вирусные заболевания.</li><li>
                                Большое число родинок на эпилируемом участке (включая волосяные).</li><li>
                                Различные болезни эпидермиса.</li><li>
                                Онкологические заболевания.</li><li>
                                Сердечно-сосудистые заболевания.</li><li>
                                Эпилепсия.</li><li>
                                Доброкачественные и злокачественные опухоли.</li><li>
                                Курс приема лекарственных препаратов (обсуждается с врачом).</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="header8 cid-black" id="content7-4">
        <div class="container-fluid align-center">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-9 m-auto left-block">
                    <div class="media-content">
                        <a name = 'skincare'></a>
                       <h1 class="mbr-section-title align-left mbr-bold mbr-white mbr-fonts-style display-2">Как ухаживать за кожей после лазерной эпиляции</h1>
                        <p class="mbr-text align-left mbr-fonts-style mbr-white display-7"><strong class="">Необходимо увлажнять кожу</strong>, таким образом, вы предотвратите раздражение, и волоски будут легче выпадать, лучшими помощниками станут крем
                                <strong class="">Бепантен</strong> или
                                <strong class="">Пантенол</strong>.
                                <strong class="">Не протирайте</strong> обработанные места лосьонами, содержащими спирт, это сушит кожу и
                                <strong class="">провоцирует раздражения</strong>.</p>
                        <p class="mbr-text align-left mbr-fonts-style mbr-white display-7"><strong class="">Минимум </strong>одну неделю
                                <strong class="">нельзя загорать </strong>на солнце и в солярии, а лучше две недели. При выходе на улицу пользуйтесь солнцезащитным кремом с высоким фактором защиты, от 35 SPF.</p>
                        <p class="mbr-text align-left mbr-fonts-style mbr-white display-7">
                                <strong class="">Воздержитесь от походов в бассейн</strong>, сауну и баню хотя бы пару дней. Также
                                <strong class="">не принимайте горячую </strong>ванну, лучше теплый душ.</p>
                        <p class="mbr-text align-left mbr-fonts-style mbr-white display-7">
                                <strong class="">На протяжении курса не выдергивайте волоски</strong>, в этот период показано только бритье, так как лазер воздействует только на луковицу волоска в активном росте. Если вы будете
                                <strong class="">делать </strong>какую-либо
                            <strong class="">депиляцию </strong>в этот период, то только
                                <strong class="">увеличите </strong>время
                            <strong class="">лазерной эпиляции.</strong> </p>
                        <p class="mbr-text align-left mbr-fonts-style mbr-white display-7">
                                <strong class="">Помните</strong>, что
                                <strong class="">строгое </strong>следование рекомендациям поможет вам избежать
                                <strong class="">негативных последствий</strong>, сохранит
                                <strong class="">красоту </strong>и облегчит приобретение
                                <strong class="">гладкой кожи надолго</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
