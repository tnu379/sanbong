    <!-- Builder -->
    <div id="styleSwitcherDropdown" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow"
        style="width: 35rem;">
        <div class="card card-lg border-0 h-100">
            <div class="card-header align-items-start">
                <div class="mr-2">
                    <h3 class="card-header-title">Front Builder</h3>
                    <p>Customize your overview page layout. Choose the one that best fits your needs.</p>
                </div>

                <!-- Toggle Button -->
                <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark" href="javascript:;"
                    data-hs-unfold-options='{
                        "target": "#styleSwitcherDropdown",
                        "type": "css-animation",
                        "animationIn": "fadeInRight",
                        "animationOut": "fadeOutRight",
                        "hasOverlay": true,
                        "smartPositionOff": true
                    }'>
                    <i class="tio-clear tio-lg"></i>
                </a>
                <!-- End Toggle Button -->
            </div>

            <div class="card-footer">
                <div class="row gx-2">
                    <div class="col">
                        <button type="button" id="js-builder-reset" class="btn btn-block btn-lg btn-white">
                            <i class="tio-restore"></i> Reset
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" id="js-builder-preview" class="btn btn-block btn-lg btn-primary">
                            <i class="tio-visible"></i> Preview
                        </button>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Footer -->
        </div>
    </div>
    <!-- End Builder -->

    <!-- Builder Toggle -->
    <div class="d-none d-md-block position-fixed bottom-0 right-0 mr-5 mb-10" style="z-index: 3;">
        <div
            style="position: fixed; top: 50%; right: 0; margin-right: -.25rem; transform: translateY(-50%); writing-mode: vertical-rl; text-orientation: sideways;">
            <div class="hs-unfold">
                <a id="builderPopover" class="js-hs-unfold-invoker btn btn-sm btn-soft-dark py-3" href="javascript:;"
                    data-template='<div class="d-none d-md-block popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
                    data-toggle="popover" data-placement="left"
                    title="<div class='d-flex align-items-center'>Front Builder <a href='#!' class='close close-light ml-auto'><i id='closeBuilderPopover' class='tio-clear'></i></a></div>"
                    data-content="Customize your overview page layout. Choose the one that best fits your needs."
                    data-html="true" data-hs-unfold-options='{
                        "target": "#styleSwitcherDropdown",
                        "type": "css-animation",
                        "animationIn": "fadeInRight",
                        "animationOut": "fadeOutRight",
                        "hasOverlay": true,
                        "smartPositionOff": true
                    }'>
                    <i class="tio-tune mr-2"></i>
                    <span class="font-weight-bold text-uppercase">Builder</span>
                </a>
            </div>
        </div>
    </div>
    <div id="headerMain" class="d-none">
        <header id="header"
            class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
            <div class="navbar-nav-wrap">
                <div class="navbar-brand-wrapper">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html" aria-label="Front">
                        <img class="navbar-brand-logo" src="{{asset('assets\svg\logos\logo.svg')}}"alt="Logo">
                        <img class="navbar-brand-logo-mini" src="{{asset('assets\svg\logos\logo-short.svg')}}" alt="Logo">
                    </a>
                    <!-- End Logo -->
                </div>

                <div class="navbar-nav-wrap-content-left">
                    <!-- Navbar Vertical Toggle -->
                    <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
                        <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip"
                            data-placement="right" title="Collapse"></i>
                        <i class="tio-last-page navbar-vertical-aside-toggle-full-align"
                            data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                            data-toggle="tooltip" data-placement="right" title="Expand"></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->
                </div>

                <!-- Secondary Content -->
                <div class="navbar-nav-wrap-content-right">
                    <!-- Navbar -->
                    <ul class="navbar-nav align-items-center flex-row">
                        <li class="nav-item d-md-none">
                            <!-- Search Trigger -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                    href="javascript:;" data-hs-unfold-options='{
                                    "target": "#searchDropdown",
                                    "type": "css-animation",
                                    "animationIn": "fadeIn",
                                    "hasOverlay": "rgba(46, 52, 81, 0.1)",
                                    "closeBreakpoint": "md"
                                }'>
                                    <i class="tio-search"></i>
                                </a>
                            </div>
                            <!-- End Search Trigger -->
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <!-- Activity -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                    href="javascript:;" data-hs-unfold-options='{
                                    "target": "#activitySidebar",
                                    "type": "css-animation",
                                    "animationIn": "fadeInRight",
                                    "animationOut": "fadeOutRight",
                                    "hasOverlay": true,
                                    "smartPositionOff": true
                                }'>
                                    <i class="tio-voice-line"></i>
                                </a>
                            </div>
                            <!-- Activity -->
                        </li>
                        <li class="nav-item">
                            <!-- Account -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                                    data-hs-unfold-options='{
                                    "target": "#accountNavbarDropdown",
                                    "type": "css-animation"
                                }'>
                                    <div class="avatar avatar-sm avatar-circle"><?php $img =  session('img') ?>
                                        <img class="avatar-img" src="{{asset($img)}}"
                                            alt="Image Description">
                                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                    </div>
                                </a>
                                <div id="accountNavbarDropdown"
                                    class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account"
                                    style="width: 16rem;">
                                    <div class="dropdown-item-text">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-sm avatar-circle mr-2">
                                                <img class="avatar-img" src="{{asset($img)}}"
                                                    alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <span class="card-title h5">{{session('user_name')}}</span>
                                                <span class="card-text">{{session('user_email')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp;
                                            account</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Account -->
                        </li>
                    </ul>
                    <!-- End Navbar -->
                </div>
                <!-- End Secondary Content -->
            </div>
        </header>
    </div>
    <div id="headerFluid" class="d-none">
        <header id="header"
            class="navbar navbar-expand-xl navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered  ">
            <div class="js-mega-menu navbar-nav-wrap">
                <div class="navbar-brand-wrapper">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html" aria-label="Front">
                        <img class="navbar-brand-logo" src="{{asset('assets\svg\logos\logo.svg')}}"alt="Logo">
                    </a>
                    <!-- End Logo -->
                </div>
                <!-- Secondary Content -->
                <div class="navbar-nav-wrap-content-right">
                    <li class="nav-item d-none d-sm-inline-block">
                        <!-- Activity -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                href="javascript:;" data-hs-unfold-options='{
                                "target": "#activitySidebar",
                                "type": "css-animation",
                                "animationIn": "fadeInRight",
                                "animationOut": "fadeOutRight",
                                "hasOverlay": true,
                                "smartPositionOff": true
                            }'>
                                <i class="tio-voice-line"></i>
                            </a>
                        </div>
                        <!-- Activity -->
                    </li>

                    <li class="nav-item">
                        <!-- Account -->
                        <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
                                data-hs-unfold-options='{
                                "target": "#accountNavbarDropdown",
                                "type": "css-animation"
                                }'>
                                <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="{{asset('assets\img\160x160\img6.jpg')}}"
                                        alt="Image Description">
                                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                </div>
                            </a>
                            <div id="accountNavbarDropdown"
                                class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account"
                                style="width: 16rem;">
                                <div class="dropdown-item-text">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img" src="{{asset('assets\img\160x160\img6.jpg')}}"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="card-title h5">Mark Williams</span>
                                            <span class="card-text">mark@example.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp;
                                        account</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                                </a>
                            </div>
                        </div>
                        <!-- End Account -->
                    </li>
                    <li class="nav-item">
                        <!-- Toggle -->
                        <button type="button" class="navbar-toggler btn btn-ghost-secondary rounded-circle"
                            aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenu"
                            data-toggle="collapse" data-target="#navbarNavMenu">
                            <i class="tio-menu-hamburger"></i>
                        </button>
                        <!-- End Toggle -->
                    </li>
                    </ul>
                    <!-- End Navbar -->
                </div>
                <!-- End Secondary Content -->
            </div>
        </header>
    </div>
    <div id="headerDouble" class="d-none">
        <header id="header" class="navbar navbar-expand-lg navbar-bordered flex-lg-column px-0">
            <div class="navbar-dark w-100">
                <div class="container-fluid">
                    <div class="navbar-nav-wrap">
                        <div class="navbar-brand-wrapper">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.html" aria-label="Front">
                                <img class="navbar-brand-logo" src="{{asset('assets\svg\logos\logo-white.svg')}}" alt="Logo">
                            </a>
                            <!-- End Logo -->
                        </div>
                        <!-- Secondary Content -->
                        <div class="navbar-nav-wrap-content-right">
                            <!-- Navbar -->
                            <ul class="navbar-nav align-items-center flex-row">
                                <li class="nav-item d-lg-none">
                                    <!-- Search Trigger -->
                                    <div class="hs-unfold">
                                        <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle"
                                            href="javascript:;" data-hs-unfold-options='{
                                        "target": "#searchDropdown",
                                        "type": "css-animation",
                                        "animationIn": "fadeIn",
                                        "hasOverlay": "rgba(46, 52, 81, 0.1)",
                                        "closeBreakpoint": "md"
                                    }'>
                                            <i class="tio-search"></i>
                                        </a>
                                    </div>
                                    <!-- End Search Trigger -->
                                </li>
                                <li class="nav-item">
                                    <!-- Toggle -->
                                    <button type="button" class="navbar-toggler btn btn-ghost-light rounded-circle"
                                        aria-label="Toggle navigation" aria-expanded="false"
                                        aria-controls="navbarNavMenu" data-toggle="collapse"
                                        data-target="#navbarNavMenu">
                                        <i class="tio-menu-hamburger"></i>
                                    </button>
                                    <!-- End Toggle -->
                                </li>
                            </ul>
                            <!-- End Navbar -->
                        </div>
                        <!-- End Secondary Content -->
                    </div>
                </div>
            </div>
        </header>
    </div>
