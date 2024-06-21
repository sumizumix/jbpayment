<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
                <img src="{{ asset('/backend-assets/images/logos/jb-international-logo-white.png') }}" width="150" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Admin Panel</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('/') ? 'active' : '' }}" href="{{ url('/') }}"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-world"></i>
                        </span>
                        <span class="hide-menu">Go To HomePage</span>
                    </a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.courses.index', 'admin.auth.service.create', 'admin.service.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.courses.index') }}" aria-expanded="false">
                        <span>

                            <i class="ti ti-book"></i>
                        </span>
                        <span class="hide-menu">Courses</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs(['admin.auth.payment.index', 'admin.auth.payment.create', 'admin.payment.edit']) ? 'active' : '' }}"
                        href="{{ route('admin.auth.payment.index') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-credit-card"></i>

                        </span>
                        <span class="hide-menu">Fee Type</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->routeIs('admin.auth.booking.cartindex') ? 'active' : '' }}"
                        href="{{ route('admin.auth.booking.cartindex') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-shopping-cart"></i> </span>
                        <span class="hide-menu">Reports </span>
                    </a>
                </li>

            </ul>
        </nav>

        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
