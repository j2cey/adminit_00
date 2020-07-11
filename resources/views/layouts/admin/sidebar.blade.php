<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{url('AdminLTE/dist/img/default-user-image.png') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview {{ Request::is('profiles*') ? 'menu-open' : ''  }}">
                <a href="{{ route('profiles.index') }}" class="nav-link {{ Request::is('profiles*') ? 'active' : ''  }}">
                    <p>
                        {{ Auth::user()->name }}
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('profiles.index') }}" class="nav-link {{ Request::is('profiles') ? 'active' : ''  }}">
                            <i class="far fa-user nav-icon" aria-hidden="true"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('profiles.create') }}" class="nav-link {{ Request::is('profiles/create') ? 'active' : ''  }}">
                            <i class="far fa-sign-out" aria-hidden="true"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="/" class="nav-link {{ Request::is('/') ? 'active' : ''  }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard

                </p>
            </a>
        </li>
        <li class="nav-item has-treeview {{ Request::is('reports*') ? 'menu-open' : ''  }}">
            <a href="{{ route('reports.index') }}" class="nav-link {{ Request::is('reports*') ? 'active' : ''  }}">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                    Reports
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('reports.index') }}" class="nav-link {{ Request::is('reports') ? 'active' : ''  }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('reports.create') }}" class="nav-link {{ Request::is('reports/create') ? 'active' : ''  }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>Create</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
