<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fe-airplay"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                @foreach ($menus as $m)
                    @if (count($m->children))
                        @can($m->permission_name . '_show')
                            <li @if (request()->segment(1) == $m->prefix) class="mm-active" @endif>
                                <a href="#" @if (request()->segment(1) == $m->prefix) class="active" @endif>
                                    <i class="{{ $m->icon }}"></i>
                                    <span> {{ $m->name }} </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    @foreach ($m->children as $sm)
                                        {{-- {{ dd(request()->segment(2) . $sm->permission_name) }} --}}
                                        @can($sm->permission_name . '_show')
                                            <li @if (request()->segment(2) == $sm->permission_name) class="active mm-active" @endif><a
                                                    href="{{ Route::getRoutes()->getByName($sm->url) ? route($sm->url) : '#' }}"@if (request()->segment(2) == $sm->permission_name) class="active" @endif>{{ $sm->name }}</a>
                                            </li>
                                        @endcan
                                    @endforeach

                                </ul>
                            </li>
                        @endcan
                    @else
                        @can($m->permission_name . '_show')
                            <li @if (request()->segment(1) == $m->prefix) class="mm-active" @endif>
                                <a href="{{ Route::getRoutes()->getByName($m->url) ? route($m->url) : '#' }}"
                                    @if (request()->segment(1) == $m->prefix) class="active" @endif>
                                    <i class="{{ $m->icon }}"></i>
                                    <span> {{ $m->name }} </span>
                                </a>
                            </li>
                        @endcan
                    @endif
                @endforeach
                <hr>
                <li>
                    <a href="#" class="btn-logout">
                        <i class="fe-log-out"></i>
                        <span> Logout </span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
