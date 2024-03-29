<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ config('app.url') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ config('app.url') }}/assets/images/classic-theme_footer_logo.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ config('app.url') }}/assets/images/classic-theme_footer_logo.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="#" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ config('app.url') }}/assets/images/classic-theme_footer_logo.png" alt="" height="35">
            </span>
            <span class="logo-lg">
                <img src="{{ config('app.url') }}/assets/images/classic-theme_footer_logo.png" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <!-- Dashboard Menu -->
                    <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.index') }}">
                                 <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboards</span>
                            </a>
                        </li>
 <li class="nav-item">
                    <a class="nav-link menu-link" href="#society" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="society">
                        <i class="ri-building-2-fill"></i> <span data-key="t-dashboards"
                            style="font-size: 18px">KYC</span>
                    </a>
                    <div class="collapse menu-dropdown" id="society">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('society.index') }}" class="nav-link" data-key="t-analytics"
                                    style="font-size: 15px;">
                                    View </a>
                            </li>
                        </ul>
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('society.create') }}" target="_blank" class="nav-link" data-key="t-analytics"
                                    style="font-size: 15px;">
                                    Create</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- End Dashboard Menu -->

                <!-- Admin Menu -->
                 @if(auth()->user()->role_id==1)
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#members" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="members">
                        <i class="ri-group-fill"></i> <span data-key="t-dashboards" style="font-size: 18px">TL</span>
                    </a>
                    <div class="collapse menu-dropdown" id="members">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('members.index') }}" class="nav-link" data-key="t-analytics"
                                    style="font-size: 15px;">
                                    View </a>
                            </li>
                        </ul>
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('members.create') }}" class="nav-link" data-key="t-analytics"
                                    style="font-size: 15px;">
                                    Create </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#resident" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="resident">
                                        <i class="ri-file-3-fill"></i> <span data-key="t-dashboards"
                                            style="font-size: 18px">KYC Category</span>
                                    </a>
                                    <div class="collapse menu-dropdown" id="resident">


                                        <ul class="nav nav-sm flex-column">

                                            <li class="nav-item">
                                                <a href="{{ route('resident.index') }}" class="nav-link" data-key="t-analytics"
                                                    style="font-size: 15px;">
                                                    List </a>
                                            </li>
                                             <li class="nav-item">
                                                <a href="{{ route('resident.create') }}" class="nav-link" data-key="t-analytics"
                                                    style="font-size: 15px;">
                                                    Create </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                @endif


                 @if(auth()->user()->role_id==1 || auth()->user()->role_id==2)

                 <li class="nav-item">
                    <a class="nav-link menu-link" href="#guard" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="guard">
                        <i class="ri-shield-user-fill"></i> <span data-key="t-dashboards"
                            style="font-size: 18px">Agent</span>
                    </a>
                    <div class="collapse menu-dropdown" id="guard">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('guard.index') }}" class="nav-link" data-key="t-analytics"
                                    style="font-size: 15px;">
                                    Veiw </a>
                            </li>
                        </ul>
                        @if(auth()->user()->role_id==1)
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('guard.create') }}" class="nav-link" data-key="t-analytics"
                                    style="font-size: 15px;">
                                    Create </a>
                            </li>
                        </ul>
                          @endif
                    </div>
                </li>

                @endif
                {{-- @endif --}}
                <!-- End Admin Menu -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<div class="vertical-overlay"></div>
