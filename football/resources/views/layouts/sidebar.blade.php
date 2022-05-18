<div id="sidebarMain" class="d-none">
    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <div class="navbar-brand-wrapper justify-content-between">
                    <!-- Logo -->


                    <a class="navbar-brand" href="index.html" aria-label="Front">
                        <img class="navbar-brand-logo" src="{{ asset('assets\svg\logos\logo.svg') }}" alt="Logo">
                        <img class="navbar-brand-logo-mini" src="{{ asset('assets\svg\logos\logo-short.svg') }}"
                             alt="Logo">
                    </a>

                    <!-- End Logo -->

                    <!-- Navbar Vertical Toggle -->
                    <button type="button"
                            class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->
                </div>

                <!-- Content -->
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav navbar-nav-lg nav-tabs">

                        <!-- Pages -->
                        <li class="navbar-vertical-aside-has-menu ">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;"
                               title="Pages">
                                <i class="tio-pages-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboard</span>
                            </a>

                            <ul style="list-style-type: none;" class="">
                                @if (session('role') == 1)
                                    <li class="navbar-vertical-aside-has-menu ">
                                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                           href="javascript:;" title="Users">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Users</span>
                                        </a>

                                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                            <li class="nav-item">
                                                <a class="nav-link" id="overview" href="/users" title="Overview">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Overview</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="/users/create" title="Add User">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Add User <span
                                                            class="badge badge-info badge-pill ml-1">Hot</span></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                @elseif(session('role') == 2)
                                    {{-- <li class="navbar-vertical-aside-has-menu ">
                                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                            href="javascript:;" title="E-commerce">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">E-commerce</span>
                                        </a>

                                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce.html" title="Overview">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Overview</span>
                                                </a>
                                            </li>

                                            <li class="navbar-vertical-aside-has-menu ">
                                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                                    href="javascript:;" title="Products">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Products</span>
                                                </a>

                                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="ecommerce-products.html"
                                                            title="Products">
                                                            <span class="tio-circle nav-indicator-icon"></span>
                                                            <span class="text-truncate">Products</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="ecommerce-product-details.html"
                                                            title="Product Details">
                                                            <span class="tio-circle nav-indicator-icon"></span>
                                                            <span class="text-truncate">Product Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="ecommerce-add-product.html"
                                                            title="Add Product">
                                                            <span class="tio-circle nav-indicator-icon"></span>
                                                            <span class="text-truncate">Add Product</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="navbar-vertical-aside-has-menu ">
                                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                                    href="javascript:;" title="Orders">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Orders</span>
                                                </a>

                                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="ecommerce-orders.html"
                                                            title="Orders">
                                                            <span class="tio-circle nav-indicator-icon"></span>
                                                            <span class="text-truncate">Orders</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="ecommerce-order-details.html"
                                                            title="Order Details">
                                                            <span class="tio-circle nav-indicator-icon"></span>
                                                            <span class="text-truncate">Order Details</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="navbar-vertical-aside-has-menu ">
                                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                                    href="javascript:;" title="Customers">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Customers</span>
                                                </a>

                                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="ecommerce-customers.html"
                                                            title="Customers">
                                                            <span class="tio-circle nav-indicator-icon"></span>
                                                            <span class="text-truncate">Customers</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="ecommerce-customer-details.html"
                                                            title="Customer Details">
                                                            <span class="tio-circle nav-indicator-icon"></span>
                                                            <span class="text-truncate">Customer Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " href="ecommerce-add-customers.html"
                                                            title="Add Customers">
                                                            <span class="tio-circle nav-indicator-icon"></span>
                                                            <span class="text-truncate">Add Customers</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce-manage-reviews.html"
                                                    title="Manage Reviews">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Manage Reviews</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce-checkout.html"
                                                    title="Checkout">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Checkout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li class="navbar-vertical-aside-has-menu ">
                                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                           href="javascript:;" title="Projects">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Yard</span>
                                        </a>

                                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ route('yard_index') }}"
                                                   title="Overview">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Overview</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ route('yard_create') }}"
                                                   title="Timeline">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Add Yard</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="navbar-vertical-aside-has-menu ">
                                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                           href="javascript:;" title="Projects">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Order</span>
                                        </a>

                                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ route('orders_index') }}"
                                                   title="Overview">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Overview</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="navbar-vertical-aside-has-menu ">
                                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                           href="javascript:;" title="Projects">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Booking</span>
                                        </a>

                                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ route('vendor_booking') }}"
                                                   title="Overview">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Overview</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @elseif(session('role') == 3)
                                    <li class="navbar-vertical-aside-has-menu ">
                                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                           href="javascript:;" title="Projects">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Booking</span>
                                        </a>

                                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ route('filter') }}"
                                                   title="Overview">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Overview</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                <li class="navbar-vertical-aside-has-menu ">
                                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                       href="javascript:;" title="Projects">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Payment</span>
                                    </a>

                                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                        <li class="nav-item">
                                            <a class="nav-link " href="{{ route('payment_index')}}"
                                               title="Overview">
                                                <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                <span class="text-truncate">Overview</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navbar-vertical-aside-has-menu ">
                                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                       href="javascript:;" title="Projects">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Profile</span>
                                    </a>

                                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                        <li class="nav-item">
                                            <a class="nav-link " href="{{ route('user_edit', Auth::id()) }}"
                                               title="Overview">
                                                <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                <span class="text-truncate">Overview</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                {{-- <li class="navbar-vertical-aside-has-menu ">
                                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                        href="javascript:;" title="Project">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Project</span>
                                    </a>

                                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                        <li class="nav-item">
                                            <a class="nav-link " href="project.html" title="Overview">
                                                <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                <span class="text-truncate">Overview</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="project-files.html" title="Files">
                                                <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                <span class="text-truncate">Files <span
                                                        class="badge badge-info badge-pill ml-1">Hot</span></span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="project-activity.html" title="Activity">
                                                <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                <span class="text-truncate">Activity</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="project-teams.html" title="Teams">
                                                <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                <span class="text-truncate">Teams</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="project-settings.html" title="Settings">
                                                <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                <span class="text-truncate">Settings</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="referrals.html" title="Referrals">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Referrals</span>
                                    </a>
                                </li> --}}
                            </ul>
                        </li>
                        <!-- End Pages -->

                        <!-- Apps -->
                    {{-- <li class="navbar-vertical-aside-has-menu ">
                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;"
                            title="Apps">
                            <i class="tio-apps nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Apps
                                <span class="badge badge-info badge-pill ml-1">Hot</span></span>
                        </a>

                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="nav-item">
                                <a class="nav-link " href="apps-kanban.html" title="Kanban">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Kanban</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="apps-calendar.html" title="Calendar">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Calendar <span
                                            class="badge badge-info badge-pill ml-1">New</span></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="apps-invoice-generator.html"
                                    title="Invoice Generator">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Invoice Generator</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="apps-file-manager.html" title="File Manager">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">File Manager</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    <!-- End Apps -->

                        <!-- Authentication -->
                    {{-- <li class="navbar-vertical-aside-has-menu ">
                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;"
                            title="Authentication">
                            <i class="tio-lock-outlined nav-icon"></i>
                            <span
                                class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Authentication</span>
                        </a>

                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                    href="javascript:;" title="Sign In">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Sign In</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-signin-basic.html"
                                            title="Basic">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-signin-cover.html"
                                            title="Cover">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Cover</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                    href="javascript:;" title="Sign Up">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Sign Up</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-signup-basic.html"
                                            title="Basic">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-signup-cover.html"
                                            title="Cover">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Cover</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                    href="javascript:;" title="Reset Password">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Reset Password</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-reset-password-basic.html"
                                            title="Basic">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-reset-password-cover.html"
                                            title="Cover">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Cover</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                    href="javascript:;" title="Email Verification">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Email Verification</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link "
                                            href="authentication-email-verification-basic.html" title="Basic">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link "
                                            href="authentication-email-verification-cover.html" title="Cover">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Cover</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                    href="javascript:;" title="2-step Verification">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">2-step Verification</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link "
                                            href="authentication-two-step-verification-basic.html" title="Basic">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link "
                                            href="authentication-two-step-verification-cover.html" title="Cover">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Cover</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;" data-toggle="modal"
                                    data-target="#welcomeMessageModal" title="Welcome Message">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Welcome Message</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="error-404.html" title="Error 404">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Error 404</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="error-500.html" title="Error 500">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Error 500</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    <!-- End Authentication -->

                    {{-- <li class="nav-item ">
                        <a class="js-nav-tooltip-link nav-link " href="welcome-page.html" title="Welcome page"
                            data-placement="left">
                            <i class="tio-visible-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Welcome
                                Page</span>
                        </a>
                    </li> --}}
                </div>
            </div>
    </aside>
</div>
<div id="sidebarCompact" class="d-none">
    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-brand d-flex justify-content-center">
                <!-- Logo -->


                <a class="navbar-brand" href="index.html" aria-label="Front">
                    <img class="navbar-brand-logo-short" src="assets\svg\logos\logo-short.svg" alt="Logo">
                </a>

                <!-- End Logo -->
            </div>

            <!-- Content -->
            <div class="navbar-vertical-content">
                <ul class="navbar-nav nav-compact">
                    <!-- Pages -->
                    <li class="navbar-vertical-aside-has-menu nav-item">
                        <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Pages">
                            <i class="tio-pages-outlined nav-icon"></i>
                            <span class="nav-compact-title text-truncate">Pages</span>
                        </a>

                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="Users">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Users</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="users.html" title="Overview">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Overview</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="users-leaderboard.html" title="Leaderboard">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Leaderboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="users-add-user.html" title="Add User">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Add User <span
                                                    class="badge badge-info badge-pill ml-1">Hot</span></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="User Profile">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">User Profile <span
                                            class="badge badge-primary badge-pill ml-1">5</span></span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="user-profile.html" title="Profile">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="user-profile-teams.html" title="Teams">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Teams</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="user-profile-projects.html" title="Projects">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Projects</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="user-profile-connections.html"
                                           title="Connections">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Connections</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="user-profile-my-profile.html"
                                           title="My Profile">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">My Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="Account">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Account</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="account-settings.html" title="Settings">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Settings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="account-billing.html" title="Billing">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Billing</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="account-invoice.html" title="Invoice">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Invoice</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="account-api-keys.html" title="API Keys">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">API Keys</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="E-commerce">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">E-commerce</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="ecommerce.html" title="Overview">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Overview</span>
                                        </a>
                                    </li>

                                    <li class="navbar-vertical-aside-has-menu ">
                                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                           href="javascript:;" title="Products">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Products</span>
                                        </a>

                                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce-products.html"
                                                   title="Products">
                                                    <span class="tio-circle nav-indicator-icon"></span>
                                                    <span class="text-truncate">Products</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce-product-details.html"
                                                   title="Product Details">
                                                    <span class="tio-circle nav-indicator-icon"></span>
                                                    <span class="text-truncate">Product Details</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce-add-product.html"
                                                   title="Add Product">
                                                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                                                    <span class="text-truncate">Add Product</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="navbar-vertical-aside-has-menu ">
                                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                           href="javascript:;" title="Orders">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Orders</span>
                                        </a>

                                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce-orders.html" title="Orders">
                                                    <span class="tio-circle nav-indicator-icon"></span>
                                                    <span class="text-truncate">Orders</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce-order-details.html"
                                                   title="Order Details">
                                                    <span class="tio-circle nav-indicator-icon"></span>
                                                    <span class="text-truncate">Order Details</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="navbar-vertical-aside-has-menu ">
                                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                           href="javascript:;" title="Customers">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Customers</span>
                                        </a>

                                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce-customers.html"
                                                   title="Customers">
                                                    <span class="tio-circle nav-indicator-icon"></span>
                                                    <span class="text-truncate">Customers</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce-customer-details.html"
                                                   title="Customer Details">
                                                    <span class="tio-circle nav-indicator-icon"></span>
                                                    <span class="text-truncate">Customer Details</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce-add-customers.html"
                                                   title="Add Customers">
                                                    <span class="tio-circle nav-indicator-icon"></span>
                                                    <span class="text-truncate">Add Customers</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="ecommerce-manage-reviews.html"
                                           title="Manage Reviews">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Manage Reviews</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="ecommerce-checkout.html" title="Checkout">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Checkout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="Projects">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Projects</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="projects.html" title="Overview">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Overview</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="projects-timeline.html" title="Timeline">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Timeline</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu ">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="Project">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Project</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="project.html" title="Overview">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Overview</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="project-files.html" title="Files">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Files <span
                                                    class="badge badge-info badge-pill ml-1">Hot</span></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="project-activity.html" title="Activity">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Activity</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="project-teams.html" title="Teams">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Teams</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="project-settings.html" title="Settings">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- End Pages -->

                    <!-- Apps -->
                    <li class="navbar-vertical-aside-has-menu nav-item">
                        <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Apps">
                            <i class="tio-apps nav-icon"></i>
                            <span class="nav-compact-title text-truncate">Apps</span>
                        </a>

                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="nav-item">
                                <a class="nav-link " href="apps-kanban.html" title="Kanban">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Kanban</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="apps-calendar.html" title="Calendar">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Calendar <span
                                            class="badge badge-info badge-pill ml-1">New</span></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="apps-invoice-generator.html" title="Invoice Generator">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Invoice Generator</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="apps-file-manager.html" title="File Manager">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">File Manager</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Apps -->

                    <!-- Authentication -->
                    <li class="navbar-vertical-aside-has-menu nav-item">
                        <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;"
                           title="Authentication">
                            <i class="tio-lock-outlined nav-icon"></i>
                            <span class="nav-compact-title text-truncate">Authentication</span>
                        </a>

                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                            <li class="navbar-vertical-aside-has-menu nav-item">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="Sign In">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Sign In</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-signin-basic.html"
                                           title="Basic">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-signin-cover.html"
                                           title="Cover">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Cover</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu nav-item">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="Sign Up">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Sign Up</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-signup-basic.html"
                                           title="Basic">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-signup-cover.html"
                                           title="Cover">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Cover</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu nav-item">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="Reset Password">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Reset Password</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-reset-password-basic.html"
                                           title="Basic">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-reset-password-cover.html"
                                           title="Cover">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Cover</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu nav-item">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="Email Verification">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Email Verification</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-email-verification-basic.html"
                                           title="Basic">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="authentication-email-verification-cover.html"
                                           title="Cover">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Cover</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="navbar-vertical-aside-has-menu nav-item">
                                <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                   href="javascript:;" title="2-step Verification">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">2-step Verification</span>
                                </a>

                                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                    <li class="nav-item">
                                        <a class="nav-link "
                                           href="authentication-two-step-verification-basic.html" title="Basic">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link "
                                           href="authentication-two-step-verification-cover.html" title="Cover">
                                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                                            <span class="text-truncate">Cover</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;" data-toggle="modal"
                                   data-target="#welcomeMessageModal" title="Welcome Message">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Welcome Message</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="error-404.html" title="Error 404">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Error 404</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="error-500.html" title="Error 500">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Error 500</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Authentication -->
                    <li class="nav-item">
                        <a class="nav-link " href="welcome-page.html" title="Welcome Page">
                            <i class="tio-visible-outlined nav-icon"></i>
                            <span class="nav-compact-title text-truncate">Welcome Page</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Content -->
        </div>
    </aside>
</div>
