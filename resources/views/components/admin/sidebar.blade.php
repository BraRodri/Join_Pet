<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand align-items-center justify-content-center" href="{{ route('panel') }}">
        <img src="{{ asset('images/logotipo_2.png') }}" class="img-fluid" width="70%"> <p></p>
        <div class="sidebar-brand-text pt-5">PANEL CONTROL</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Inicio -->
    <li class="nav-item {{ ! Route::is('panel') ?: 'active' }}">
        <a class="nav-link" href="{{ route('panel') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Gestión de Categorias -->
    @can('Ver Categorias')
        <li class="nav-item {{ ! Route::is('categorias.index') ?: 'active' }}">
            <a class="nav-link" href="{{ route('categorias.index') }}">
                <i class="fa-solid fa-clipboard-list"></i>
                <span>Gestión de Categorias</span>
            </a>
        </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
