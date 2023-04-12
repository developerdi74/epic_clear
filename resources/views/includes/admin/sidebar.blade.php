<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.lead.index') }}" class="nav-link {{ (Route::currentRouteName()=='admin.lead.index') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Заявки</p>
                        <span class="badge badge-info right">{{ DB::table('leads')->count() }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.area.index') }}" class="nav-link {{ (Route::currentRouteName() == 'admin.area.index') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Зоны и цены</p>
                        <span class="badge badge-info right">{{ $areas->count() }}</span>
                    </a>
                </li>
            </ul>
        </li>
        {{ $leads->where('process','new')->count() }}
        <li class="nav-header">Фильтр заявок</li>
        <li class="nav-item">
            <a href="{{ route('admin.lead.index','process=new') }}" class="nav-link {{ (request()->input('process')=='new') ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Новые</p>
                <span class="badge badge-info right">{{ DB::table('leads')->where('process', 'like','new')->count() }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.lead.index','process=success') }}" class="nav-link {{ (request()->input('process')=='success') ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Принятые</p>
                <span class="badge badge-info right">{{ DB::table('leads')->where('process', 'like','success')->count() }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.lead.index','process=update') }}" class="nav-link {{ (request()->input('process')=='update') ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Думают</p>
                <span class="badge badge-info right">{{ DB::table('leads')->where('process', 'like','update')->count() }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.lead.index','process=delete') }}" class="nav-link {{ (request()->input('process')=='delete') ? 'active' : '' }}">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Удаленные</p>
                <span class="badge badge-info right">{{ DB::table('leads')->where('process', 'like','delete')->count() }}</span>
            </a>
        </li>
    </ul>
</nav>
