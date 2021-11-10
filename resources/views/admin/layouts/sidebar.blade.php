<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{ url('/') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        @if (isset(auth()->user()->role->permission['name']['department']['can-view']))
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            Department
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                            </div>
                            @endif
                    </a>

                    <div class="collapse{{ Request::is('departments/create') or (Request::is('departments') ? 'active' : '') }}"
                        id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion ">
                        <nav class="sb-sidenav-menu-nested nav">
                            @if (isset(auth()->user()->role->permission['name']['department']['can-add']))
                                <a class="nav-link {{ Request::is('departments/create') ? 'active' : '' }}"
                                    href="{{ route('departments.create') }}">Create</a>
                            @endif
                            @if (isset(auth()->user()->role->permission['name']['department']['can-list']))
                                <a class="nav-link" {{ Request::is('departments/index') ? 'active' : '' }}"
                                    href="{{ route('departments.index') }}">View</a>
                            @endif
                        </nav>

                    </div>


                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                        User
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                data-target="#pagesCollapseAuth" aria-expanded="false"
                                aria-controls="pagesCollapseAuth">
                                Role
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingTwo"
                                data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if (isset(auth()->user()->role->permission['name']['role']['can-add']))
                                        <a class="nav-link" href="{{ route('roles.create') }}">Create Role</a>
                                    @endif
                                    @if (isset(auth()->user()->role->permission['name']['role']['can-list']))
                                        <a class="nav-link" href="{{ route('roles.index') }}">View Role</a>
                                    @endif
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="{{ route('users.index') }}" data-toggle="collapse"
                                data-target="#pagesCollapseError" aria-expanded="false"
                                aria-controls="pagesCollapseError">User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if (isset(auth()->user()->role->permission['name']['user']['can-list']))
                                        <a class="nav-link" href="{{ route('users.index') }}">View User</a>
                                    @endif
                                    @if (isset(auth()->user()->role->permission['name']['user']['can-add']))
                                        <a class="nav-link" href="{{ route('users.create') }}">Create User</a>
                                    @endif
                                </nav>
                            </div>


                            <a class="nav-link collapsed" href="{{ route('permissions.index') }}"
                                data-toggle="collapse" data-target="#pagesCollapsePermission" aria-expanded="false"
                                aria-controls="pagesCollapsePermission">Permission

                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </a>
                            <div class="collapse" id="pagesCollapsePermission" aria-labelledby="headingOne"
                                data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if (isset(auth()->user()->role->permission['name']['permission']['can-list']))
                                        <a class="nav-link" href="{{ route('permissions.index') }}">View
                                            Permission</a>
                                    @endif
                                    @if (isset(auth()->user()->role->permission['name']['permission']['can-add']))
                                        <a class="nav-link" href="{{ route('permissions.create') }}">Create
                                            Permission</a>
                                    @endif
                                </nav>
                            </div>
                            {{-- Leave --}}


                        </nav>

                    </div>
                    {{-- start leave --}}
                    <a class="nav-link collapsed" href="{{ route('permissions.index') }}" data-toggle="collapse"
                        data-target="#pagesCollapseLeave" aria-expanded="false" aria-controls="pagesCollapseLeave">
                        <div class="sb-nav-link-icon">
                            <i class="bi bi-box-arrow-right"></i>
                        </div>
                        Staff Leave
                        <div class="sb-sidenav-collapse-arrow">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="collapse" id="pagesCollapseLeave" aria-labelledby="headingOne"
                        data-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            @if (isset(auth()->user()->role->permission['name']['leave']['can-list']))
                                <a class="nav-link" href="{{ route('leaves.index') }}">Approve Leave</a>
                            @endif

                            <a class="nav-link" href="{{ route('leaves.create') }}">Create Leave</a>
                        </nav>
                    </div>
                    {{-- end Leave --}}

                    {{-- Staff Notice --}}
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsNotice"
                        aria-expanded="false" aria-controls="collapseLayoutsNotice">
                        @if (isset(auth()->user()->role->permission['name']['notice']['can-view']))
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-info-square"></i>
                            </div>
                            Notice
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                            @endif
                    </a>

                    <div class="collapse{{ Request::is('notices/create') or (Request::is('notices') ? 'active' : '') }}"
                        id="collapseLayoutsNotice" aria-labelledby="headingOne" data-parent="#sidenavAccordion ">
                        <nav class="sb-sidenav-menu-nested nav">
                            @if (isset(auth()->user()->role->permission['name']['notice']['can-add']))
                                <a class="nav-link {{ Request::is('notices/create') ? 'active' : '' }}"
                                    href="{{ route('notices.create') }}">Create</a>
                            @endif
                            @if (isset(auth()->user()->role->permission['name']['notice']['can-list']))
                                <a class="nav-link" {{ Request::is('notices/index') ? 'active' : '' }}"
                                    href="{{ route('notices.index') }}">View</a>
                            @endif
                        </nav>

                    </div>
                    {{-- End Staff Notice --}}

                    {{-- Start Mail  --}}
                    @if (isset(auth()->user()->role->permission['name']['mail']['can-add']))
                    <a class="nav-link" href="{{ url('/mail') }}">
                        <div class="sb-nav-link-icon"><i class="bi bi-envelope-check"></i></div>
                        Mail
                    </a>
                    @endif
                    {{-- End Mail  --}}
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">
                    Logged in as:
                </div>
                Start Bootstrap
            </div>
        </nav>
    </div>
    {{-- </div> --}}
