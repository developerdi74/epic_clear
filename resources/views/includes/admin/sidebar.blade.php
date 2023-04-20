<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.calendar.index') }}" class="nav-link {{ (Route::currentRouteName()=='admin.calendar.index') ? 'active' : '' }}">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>Календарь</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.lead.create') }}" class="nav-link {{ (Route::currentRouteName()=='admin.lead.create') ? 'active' : '' }}">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>Создать заявку</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.lead.index') }}" class="nav-link {{ (Route::currentRouteName()=='admin.lead.index') ? 'active' : '' }}">
                        <i class="far fa-envelope nav-icon"></i>
                        <p>Заявки</p>
                        <span class="badge badge-info right">{{ DB::table('leads')->where('deleted_at',NULL)->count() }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.area.index') }}" class="nav-link {{ (Route::currentRouteName() == 'admin.area.index') ? 'active' : '' }}">
                        <i class="fas fa-list nav-icon"></i>
                        <p>Зоны и цены</p>
                        <span class="badge right">{{ $areas->count() }}</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-header">Фильтр заявок</li>
        <li class="nav-item">
            <a href="{{ route('admin.lead.index','process=new') }}" class="nav-link {{ (request()->input('process')=='new') ? 'active' : '' }}">
                <i class="nav-icon fas fa-plus-square text-warning"></i>
                <p>Новые</p>
                <span class="badge badge-danger right">{{ DB::table('leads')->where('process', 'like','new')->where('deleted_at',NULL)->count() }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.lead.index','process=success') }}" class="nav-link {{ (request()->input('process')=='success') ? 'active' : '' }}">
                <i class="nav-icon far fa-calendar-alt text-success"></i>
                <p>Принятые</p>
                <span class="badge badge-success right">{{ DB::table('leads')->where('process', 'like','success')->where('deleted_at',NULL)->count() }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.lead.index','process=update') }}" class="nav-link {{ (request()->input('process')=='update') ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text"></i>
                <p>Думают</p>
                <span class="badge badge right">{{ DB::table('leads')->where('process', 'like','update')->where('deleted_at',NULL)->count() }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.lead.index','process=complite') }}" class="nav-link {{ (request()->input('process')=='complite') ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-info"></i>
                <p class="text">Выполнено</p>
                <span class="badge badge right">{{ DB::table('leads')->where('process', 'like','complite')->where('deleted_at',NULL)->count() }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.lead.index','process=delete') }}" class="nav-link {{ (request()->input('process')=='delete') ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Удаленные</p>
                <span class="badge badge right">{{ DB::table('leads')->where('process', 'like','delete')->where('deleted_at',NULL)->count() }}</span>
            </a>
        </li>
        <li class="nav-header">Контент</li>
        <li class="nav-item">
            <a href="{{ route('admin.promo.index') }}" class="nav-link {{ (Route::currentRouteName() == 'admin.promo.index') ? 'active' : '' }}">
                <i class="fas fa-list nav-icon"></i>
                <p>Акции</p>
            </a>
        </li>
        <li class="nav-header">Статистика</li>
        <li class="nav-item">
            <a href="{{ route('admin.statistics.index') }}" class="nav-link {{ (Route::currentRouteName() == 'admin.statistics.index') ? 'active' : '' }}">
                <i class="fas fa-list nav-icon"></i>
                <p>Доходы</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link {{ (Route::currentRouteName() == 'admin.user.index') ? 'active' : '' }}">
                <i class="fas fa-user nav-icon"></i>
                <p>Клиенты</p>
            </a>
        </li>
        <li class="nav-header">Настройки сайта</li>
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.seo.index') }}" class="nav-link {{ (Route::currentRouteName()=='admin.seo.index') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>SEO настройки страниц</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
