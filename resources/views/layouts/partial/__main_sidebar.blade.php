<aside
    class="main-sidebar elevation-4 text-sm  {{ auth()->user()->theme_mode == 1 ? 'sidebar-dark-info' : 'sidebar-dark-info' }}">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}"
       class="brand-link text-sm {{ auth()->user()->theme_mode == 1 ? 'bg-white' : ' bg-dark' }} ">
        <img src=""
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text text-info text-sm"><b>Admin</b>Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-child-indent nav-flat " data-widget="treeview"
                role="menu"
                data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}"
                           class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
{{--              @include('layouts.menu.__projects')--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
