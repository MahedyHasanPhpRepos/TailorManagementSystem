<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Tailorshop Easy Manager v.1.0.0">
    <meta name="robots" content="noindex,nofollow">
    <title>Tailorshop Easy Manager</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('tailerStaticTemplate/assets/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{ asset('tailerStaticTemplate/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('tailerStaticTemplate/dist/css/style.min.css') }}" rel="stylesheet">
    <link rel='stylesheet' href={{ asset('tailerStaticTemplate/src/custom_styles/c_styles.css') }}>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">

                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon ps-2"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.jpg" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{asset('tailerStaticTemplate/assets/images/logo-text.jpg')}}" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown"
                                aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="ti-calendar"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">today's delivary</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i
                                                            class="ti-settings"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">tomorrow's delivary</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <!-- <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i
                                                            class="ti-user"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a> -->
                                            <!-- Message -->
                                            <!-- <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i
                                                            class="fa fa-link"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a> -->
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('tailerStaticTemplate/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle"
                                    width="31">
                                <span><span style="font-size: 12px;">স্বাগতম</span>,<span
                                        style="font-size: 16px;">user
                                        name</span> <span><i class="fas fa-angle-down"></i></span></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-lock"></i>
                                    লগইন তথ্য</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-user"></i>
                                    প্রোফাইল আপডেট</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-cart-plus"></i>
                                    Bill Payment info</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">ড্যাশবোর্ড</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class="mdi mdi-calendar-plus"></i><span
                                    class="hide-menu">পোষাক অর্ডার </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="order_accepting.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu">অর্ডার গ্রহন
                                        </span></a></li>
                                <li class="sidebar-item"><a href="order_list.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu">অর্ডার লিস্ট
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class="fas fa-users"></i><span
                                    class="hide-menu">কর্মচারী পরিচালনা </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="adding_new_employee.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu"> নতুন কর্মচারী যোগ
                                        </span></a></li>

                                <li class="sidebar-item"><a href="employee_list.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu"> কর্মচারী লিস্ট
                                        </span></a></li>

                                <li class="sidebar-item"><a href="salary_management.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu"> বেতন ব্যবস্থাপনা
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class="fas fa-envelope"></i><span
                                    class="hide-menu">মেসেজ প্রদান </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="sending_sms_manually.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu"> মেসেজ প্রদান
                                        </span></a></li>
                                <li class="sidebar-item"><a href="sending_sms_list.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu"> মেসেজ প্রদান
                                            লিস্ট
                                        </span></a></li>

                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class=" fas fa-calculator"></i><span
                                    class="hide-menu">আয় ব্যয় হিসাব </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="account management.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu">হিসাব
                                            পরিচালনা
                                        </span></a></li>

                                <li class="sidebar-item"><a href="term_wise_summaries.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu">মেয়াদ অনুযায়ী
                                            সার সংক্ষেপ
                                        </span></a></li>
                                <li class="sidebar-item"><a href="pre_term_wise_summaries.html"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu"> প্র. খাত অনুযায়ী
                                            সার সংক্ষেপ
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class="fas fa-file"></i><span
                                    class="hide-menu">রিপোর্ট </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="order_report.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu">অর্ডার রিপোর্ট
                                        </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="order.html" aria-expanded="false"><i class="fas fa-cog"></i><span
                                    class="hide-menu">সেটিংস </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="clothing_name_and_wages.html"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu"> পোশাকের নাম ও
                                            মুজুরি
                                        </span></a></li>
                                <li class="sidebar-item"><a href="different_parts_of_clothing.html"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            পোশাকের বিভিন্ন অংশ
                                        </span></a></li>

                                <li class="sidebar-item"><a href="income_expenditure_sector.html"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            আয় ব্যয় এর খাত
                                        </span></a></li>

                                <li class="sidebar-item"><a href="rank_and_designation_of_employees.html"
                                        class="sidebar-link"><i class="fas fa-angle-right"></i><span
                                            class="hide-menu">
                                            কর্মচারীর পদ/পদবী
                                        </span></a></li>

                                <li class="sidebar-item"><a href="sms_template.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu">SMS টেমপ্লেট
                                        </span></a></li>
                                <li class="sidebar-item"><a href="language_settings.html" class="sidebar-link"><i
                                            class="fas fa-angle-right"></i><span class="hide-menu"> ভাষা সেটিংস
                                        </span></a></li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i
                                    class="mdi mdi-bulletin-board"></i><span class="hide-menu"> ইনভয়েস
                                </span></a></li>
                        <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i
                                    class="mdi mdi-calendar-check"></i><span class="hide-menu"> ক্যালেন্ডার
                                </span></a></li>

                        <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i
                                    class="mdi mdi-multiplication-box"></i><span class="hide-menu"> গ্যালারী
                                </span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span
                                    class="hide-menu">লগইন/রেজিস্টার </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> লগইন </span></a>
                                </li>
                                <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i
                                            class="mdi mdi-all-inclusive"></i><span class="hide-menu"> রেজিস্টার
                                        </span></a></li>
                            </ul>
                        </li> -->

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">ড্যাশবোর্ড</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">হোম</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">লাইব্রেরী</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>





            <div class="container-fluid ">

                <div class="row">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="headingOne">
                                <button class="accordion-button accordion__heading" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    পোশাকের ওয়ার্ডার সংক্রান্ত
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion__body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-hover padding_bottom_zero">
                                                <div class="box bg-cyan text-center">
                                                    <h1 class="font-light text-white"><i
                                                            class="mdi mdi-view-dashboard"></i>
                                                    </h1>
                                                    <h6 class="text-white">আজ মোট অর্ডার</h6>
                                                    <h6 class="text-white">১০</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-hover padding_bottom_zero">
                                                <div class="box bg-success text-center">
                                                    <h1 class="font-light text-white"><i
                                                            class="mdi mdi-chart-areaspline"></i>
                                                    </h1>
                                                    <h6 class="text-white">এ মাসে মোট অর্ডার</h6>
                                                    <h6 class="text-white">১০০</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-hover padding_bottom_zero">
                                                <div class="box bg-warning text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-collage"></i>
                                                    </h1>
                                                    <h6 class="text-white">আজ মোট ডেলিভারি</h6>
                                                    <h6 class="text-white">২০</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-hover padding_bottom_zero">
                                                <div class="box bg-danger text-center">
                                                    <h1 class="font-light text-white"><i
                                                            class="mdi mdi-border-outside"></i>
                                                    </h1>
                                                    <h6 class="text-white">এ মাসে মোট ডেলিভারি</h6>
                                                    <h6 class="text-white">১১০</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-info text-center">
                                                    <h1 class="font-light text-white"><i
                                                            class="mdi mdi-arrow-all"></i>
                                                    </h1>
                                                    <h6 class="text-white">আজ পর্যন্ত মোট অর্ডার</h6>
                                                    <h6 class="text-white">৫০০০</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-danger text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i>
                                                    </h1>
                                                    <h6 class="text-white">আজ পর্যন্ত মোট ডেলিভারী</h6>
                                                    <h6 class="text-white">৪৮৫০</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-info text-center">
                                                    <h1 class="font-light text-white"><i
                                                            class="mdi mdi-relative-scale"></i>
                                                    </h1>
                                                    <h6 class="text-white">আজ মোট আয়</h6>
                                                    <h6 class="text-white">২০০০</h6>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3">
                                            <div class="card card-hover">
                                                <div class="box bg-cyan text-center">
                                                    <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i>
                                                    </h1>
                                                    <h6 class="text-white">আজ মোট ব্যয়</h6>
                                                    <h6 class="text-white">১০০০</h6>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-3">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed accordion__heading" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Account Info
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion__body">
                                    <div class="row pt-4">
                                        <div class="col-md-6 col-lg-4 text-center">
                                            <div class="calculation_box_heading">
                                                আজকের হিসাব
                                            </div>
                                            <div class="calculation_box">
                                                <div class="calculation_box_left">
                                                    income
                                                </div>
                                                <div class="calculation_box_right">
                                                    1000000
                                                </div>
                                            </div>
                                            <div class="calculation_box">
                                                <div class="calculation_box_left">
                                                    cost
                                                </div>
                                                <div class="calculation_box_right">
                                                    1000000
                                                </div>
                                            </div>
                                            <div class="calculation_box">
                                                <div class="calculation_box_left">
                                                    income
                                                </div>
                                                <div class="calculation_box_right">
                                                    1000000
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-6 col-lg-4 text-center">
                                            <div class="calculation_box_heading">
                                                চলতি মাসের হিসাব
                                            </div>
                                            <div class="calculation_box calculation_box_color_2">
                                                <div class="calculation_box_left">
                                                    income
                                                </div>
                                                <div class="calculation_box_right">
                                                    1000000
                                                </div>
                                            </div>
                                            <div class="calculation_box calculation_box_color_2">
                                                <div class="calculation_box_left">
                                                    cost
                                                </div>
                                                <div class="calculation_box_right">
                                                    1000000
                                                </div>
                                            </div>
                                            <div class="calculation_box calculation_box_color_2">
                                                <div class="calculation_box_left">
                                                    income
                                                </div>
                                                <div class="calculation_box_right">
                                                    1000000
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 text-center">
                                            <div class="calculation_box_heading">
                                                গত মাসের হিসাব
                                            </div>
                                            <div class="calculation_box">
                                                <div class="calculation_box_left">
                                                    income
                                                </div>
                                                <div class="calculation_box_right">
                                                    1000000
                                                </div>
                                            </div>
                                            <div class="calculation_box">
                                                <div class="calculation_box_left">
                                                    cost
                                                </div>
                                                <div class="calculation_box_right">
                                                    1000000
                                                </div>
                                            </div>
                                            <div class="calculation_box">
                                                <div class="calculation_box_left">
                                                    income
                                                </div>
                                                <div class="calculation_box_right">
                                                    1000000
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item mt-3">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed accordion__heading" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Site Analysis
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion__body">
                                    <div class="row pt-4">
                                        <div class="row">


                                            <div class="col-md-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-user mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">2540</h5>
                                                    <small class="font-light">Total Users</small>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-plus mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">120</h5>
                                                    <small class="font-light">New Users</small>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-cart-plus mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">656</h5>
                                                    <small class="font-light">Total Shop</small>
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-tag mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">9540</h5>
                                                    <small class="font-light">Total Orders</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">বিল পেমেন্ট এর সতর্কতা</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            প্রিয় MN tailers
                                        </div>
                                        <div>
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, recusandae.
                                        </div>
                                        <div>
                                            <div>Lorem ipsum dolor sit amet.</div>

                                        </div>
                                        <div>
                                            <div>thank you</div>
                                            <div>
                                                Lorem ipsum dolor sit amet.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button> -->
                                        <button type="button" data-bs-dismiss="modal"
                                            class="btn btn-danger">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card chat__box" id="chat__box">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Chat Option</h4>
                            <div onclick="hideChatBox()"
                                style="font-size: 15px; cursor: pointer; background-color: #da542e ; color: #fff;height: 20px; width:20px ; display: flex; justify-content: center; align-items: center; border-radius: 5px ;">
                                x
                            </div>
                        </div>
                        <div class="chat-box scrollable" style="height:255px;">
                            <!--chat Row -->
                            <ul class="chat-list">
                                <!--chat Row -->
                                <li class="chat-item">
                                    <div class="chat-img"><img src="{{asset('tailerStaticTemplate/assets/images/users/1.jpg')}}" alt="user">
                                    </div>
                                    <div class="chat-content">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the
                                            printing &amp; type setting industry.</div>
                                    </div>
                                    <div class="chat-time">10:56 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="chat-item">
                                    <div class="chat-img"><img src="{{asset('tailerStaticTemplate/assets/images/users/2.jpg')}}" alt="user">
                                    </div>
                                    <div class="chat-content">
                                        <h6 class="font-medium">Bianca Doe</h6>
                                        <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                    </div>
                                    <div class="chat-time">10:57 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="odd chat-item">
                                    <div class="chat-content">
                                        <div class="box bg-light-inverse">I would love to join the team.</div>
                                        <br>
                                    </div>
                                </li>
                                <!--chat Row -->
                                <li class="odd chat-item">
                                    <div class="chat-content">
                                        <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                        <br>
                                    </div>
                                    <div class="chat-time">10:59 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="chat-item">
                                    <div class="chat-img"><img src="{{asset('tailerStaticTemplate/assets/images/users/3.jpg')}}" alt="user">
                                    </div>
                                    <div class="chat-content">
                                        <h6 class="font-medium">Angelina Rhodes</h6>
                                        <div class="box bg-light-info">Well we have good budget for the project
                                        </div>
                                    </div>
                                    <div class="chat-time">11:00 am</div>
                                </li>
                                <!--chat Row -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-9">
                                <div class="input-field mt-0 mb-0">
                                    <textarea id="textarea1" placeholder="Type and enter" class="form-control border-1"></textarea>
                                </div>
                            </div>
                            <div class="col-3">
                                <a class="btn-circle btn-lg btn-cyan float-end text-white"
                                    href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div onclick="showChatBox()" class="chat__icon" id="chat__icn">
                    <i class="fab fa-facebook-messenger"></i>
                </div>

            </div>

            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>

        </div>

    </div>

    <script src="{{ asset('tailerStaticTemplate/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('tailerStaticTemplate/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('tailerStaticTemplate/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('tailerStaticTemplate/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('tailerStaticTemplate/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('tailerStaticTemplate/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('tailerStaticTemplate/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('tailerStaticTemplate/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('tailerStaticTemplate/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('tailerStaticTemplate/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('tailerStaticTemplate/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('tailerStaticTemplate/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('tailerStaticTemplate/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('tailerStaticTemplate/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('tailerStaticTemplate/dist/js/pages/chart/chart-page-init.js') }}"></script>



    <script>
        // chatbox display and hide js 

        const chat__icon = document.getElementById('chat__icn');
        const chat__box = document.getElementById("chat__box");

        function showChatBox() {

            chat__icon.classList.add('hide_icon');
            chat__box.classList.add('show__chat__box')

        }

        function hideChatBox() {
            chat__icon.classList.remove('hide_icon');
            chat__box.classList.remove('show__chat__box')
        }
    </script>


</body>

</html>
