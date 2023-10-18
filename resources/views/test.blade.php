<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Codescandy">

    <!-- Google tag (gtag.js')}}) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M8S4MT3EYG');
    </script>


    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/images/favicon/favicon.ico') }}">


    <!-- Libs CSS -->
    <link href="{{ asset('admin/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">



    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/theme.min.css') }}">
    <link href="{{ asset('admin/libs/prismjs/themes/prism-okaidia.min.css') }}" rel="stylesheet">
    <title>Forms | Dash UI - Bootstrap 5 Admin Dashboard Template</title>

</head>

<body>
    <!-- Wrapper -->
    <main id="main-wrapper" class="main-wrapper">
        <div class="header">
            <!-- navbar -->
            <div class="navbar-custom navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                    <a class="navbar-brand d-block d-md-none" href="../../index.html">
                        <img src="{{ asset('admin/images/brand/logo/logo-2.svg') }}" alt="Image">
                    </a>



                    <a id="nav-toggle" href="#!" class="ms-auto ms-md-0 me-0 me-lg-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                            class="bi bi-text-indent-left text-muted" viewBox="0 0 16 16">
                            <path
                                d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                        </svg></a>

                    <div class="d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form action="#">


                            <div class="input-group ">
                                <input class="form-control rounded-3" type="search" value="" id="searchInput"
                                    placeholder="Search">
                                <span class="input-group-append">
                                    <button class="btn  ms-n10 rounded-0 rounded-end" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search text-dark">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul
                        class="navbar-nav navbar-right-wrap ms-lg-auto d-flex nav-top-wrap align-items-center ms-4 ms-lg-0">
                        <a href="#"
                            class="form-check form-switch theme-switch btn btn-ghost btn-icon rounded-circle mb-0 ">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>

                        </a>
                        </li>

                        <li class="dropdown stopevent ms-2">
                            <a class="btn btn-ghost btn-icon rounded-circle" href="#!" role="button"
                                id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-xs" data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                aria-labelledby="dropdownNotification">
                                <div>
                                    <div
                                        class="border-bottom px-3 pt-2 pb-3 d-flex
              justify-content-between align-items-center">
                                        <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                                        <a href="#!" class="text-muted">
                                            <span>
                                                <i class="me-1 icon-xs" data-feather="settings"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div data-simplebar style="height: 250px;">
                                        <!-- List group -->
                                        <ul class="list-group list-group-flush notification-list-scroll">
                                            <!-- List group item -->
                                            <li class="list-group-item bg-light">


                                                <a href="#!" class="text-muted">
                                                    <h5 class=" mb-1">Rishi Chopra</h5>
                                                    <p class="mb-0">
                                                        Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                                                    </p>
                                                </a>



                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">


                                                <a href="#!" class="text-muted">
                                                    <h5 class=" mb-1">Neha Kannned</h5>
                                                    <p class="mb-0">
                                                        Proin at elit vel est condimentum elementum id in ante. Maecenas
                                                        et sapien metus.
                                                    </p>
                                                </a>



                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">


                                                <a href="#!" class="text-muted">
                                                    <h5 class=" mb-1">Nirmala Chauhan</h5>
                                                    <p class="mb-0">
                                                        Morbi maximus urna lobortis elit sollicitudin sollicitudieget
                                                        elit vel pretium.
                                                    </p>
                                                </a>



                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">


                                                <a href="#!" class="text-muted">
                                                    <h5 class=" mb-1">Sina Ray</h5>
                                                    <p class="mb-0">
                                                        Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu
                                                        diam.
                                                    </p>
                                                </a>



                                            </li>
                                        </ul>
                                    </div>
                                    <div class="border-top px-3 py-2 text-center">
                                        <a href="#!" class="text-inherit ">
                                            View all Notifications
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#!" role="button" id="dropdownUser"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="{{ asset('admin/images/avatar/avatar-11.jpg') }}"
                                        class="rounded-circle">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="px-4 pb-0 pt-2">


                                    <div class="lh-1 ">
                                        <h5 class="mb-1"> John E. Grainger</h5>
                                        <a href="#!" class="text-inherit fs-6">View my profile</a>
                                    </div>
                                    <div class=" dropdown-divider mt-3 mb-2"></div>
                                </div>

                                <ul class="list-unstyled">

                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="me-2 icon-xxs dropdown-item-icon"
                                                data-feather="activity"></i>Activity Log
                                        </a>


                                    </li>


                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#!">

                                            <i class="me-2 icon-xxs dropdown-item-icon"
                                                data-feather="settings"></i>Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../../index.html">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>Sign
                                            Out
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- navbar vertical -->
        <!-- Sidebar -->

        <div class="navbar-vertical navbar nav-dashboard">
            <div class="h-100" data-simplebar>
                <!-- Brand logo -->
                <a class="navbar-brand" href="../../index.html">
                    <img src="{{ asset('admin/images/brand/logo/logo-2.svg') }}"
                        alt="dash ui - bootstrap 5 admin dashboard template">
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                            <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>
                            Dashboard
                        </a>

                        <div id="navDashboard" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/dashboard-analytics.html">
                                        Analytics </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../index.html">
                                        Project </a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link has-arrow   " href="../../pages/dashboard-ecommerce.html">
                                        Ecommerce
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow   " href="../../pages/dashboard-crm.html">
                                        CRM
                                    </a>



                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow   " href="../../pages/dashboard-finance.html">
                                        Finance
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow   " href="../../pages/dashboard-blog.html">
                                        Blog
                                    </a>

                                </li>



                            </ul>
                        </div>

                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Apps</div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow " href="../../pages/calendar.html">
                            <i data-feather="calendar" class="nav-icon me-2 icon-xxs">
                            </i> Calendar
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow " href="../../pages/chat-app.html">
                            <i data-feather="message-square" class="nav-icon me-2 icon-xxs">
                            </i> Chat
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navecommerce" aria-expanded="false" aria-controls="navecommerce">
                            <i data-feather="shopping-cart" class="nav-icon me-2 icon-xxs">
                            </i> Ecommerce
                        </a>

                        <div id="navecommerce" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/ecommerce-products.html">

                                        Products
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/ecommerce-products-details.html">

                                        Product Detail
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/ecommerce-product-edit.html">

                                        Add Product
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/ecommerce-order-list.html">

                                        Orders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/ecommerce-order-detail.html">

                                        Orders Detail
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/ecommerce-cart.html">

                                        Shopping cart
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/ecommerce-checkout.html">

                                        Checkout
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/ecommerce-customer.html">

                                        Customer
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/ecommerce-seller.html">

                                        Seller
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navEmail" aria-expanded="false" aria-controls="navEmail">
                            <i data-feather="mail" class="nav-icon me-2 icon-xxs">
                            </i> Email
                        </a>

                        <div id="navEmail" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/mail.html">

                                        Inbox
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/mail-details.html">

                                        Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/mail-draft.html">

                                        Draft
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navKanban" aria-expanded="false" aria-controls="navKanban">
                            <i data-feather="layout" class="nav-icon me-2 icon-xxs">
                            </i> Kanban
                        </a>

                        <div id="navKanban" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/task-kanban-grid.html">

                                        Grid
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/task-kanban-list.html">

                                        List
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <a class="nav-link   collapsed  " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navProject" aria-expanded="false" aria-controls="navProject">
                            <i class="nav-icon me-2 icon-xxs" data-feather="file"></i> Project
                        </a>
                        <div id="navProject" class="collapse  " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link   " href="../../pages/project-grid.html">
                                        Grid
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="../../pages/project-list.html">
                                        List
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link   collapsed  " href="#!" data-bs-toggle="collapse"
                                        data-bs-target="#navprojectSingle" aria-expanded="false"
                                        aria-controls="navprojectSingle">

                                        Single
                                    </a>
                                    <div id="navprojectSingle" class="collapse " data-bs-parent="#navProject">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link " href="../../pages/project-overview.html">
                                                    Overview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="../../pages/project-task.html">
                                                    Task
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="../../pages/project-budget.html">
                                                    Budget
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link " href="../../pages/project-files.html">
                                                    Files
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="../../pages/project-team.html">
                                                    Team
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/add-project.html">
                                        Create Project
                                    </a>
                                </li>









                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="../../pages/apps-file-manager.html">

                            <i data-feather="folder-plus" class="nav-icon me-2 icon-xxs"> </i>File Manager
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navCRM" aria-expanded="false" aria-controls="navCRM">
                            <i data-feather="pie-chart" class="nav-icon me-2 icon-xxs">
                            </i>

                            CRM
                        </a>

                        <div id="navCRM" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">


                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/crm-contacts.html">

                                        Contacts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/crm-company.html">

                                        Company
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navinvoice" aria-expanded="false" aria-controls="navinvoice">
                            <i data-feather="clipboard" class="nav-icon me-2 icon-xxs">
                            </i> Invoice
                        </a>

                        <div id="navinvoice" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/invoice-list.html">

                                        List
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/invoice-detail.html">

                                        Detail
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/invoice-generator.html">

                                        Invoice Generator
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   collapsed  " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navprofilePages" aria-expanded="false" aria-controls="navprofilePages">

                            <i data-feather="user" class="nav-icon me-2 icon-xxs">
                            </i> Profile
                        </a>
                        <div id="navprofilePages" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/profile-overview.html">
                                        Overview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/profile-project.html">
                                        Project
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/profile-files.html">
                                        Files
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/profile-team.html">
                                        Team
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/profile-followers.html">
                                        Followers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/profile-activity.html">
                                        Activity
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/profile-settings.html">
                                        Settings
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navblog" aria-expanded="false" aria-controls="navblog">
                            <i data-feather="edit" class="nav-icon me-2 icon-xxs">
                            </i> Blog
                        </a>

                        <div id="navblog" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/blog-author.html">

                                        Author
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/blog-author-detail.html">

                                        Detail
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="../../pages/create-blog-post.html">

                                        Create Post
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Layouts & Pages</div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link   collapsed  " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navlayoutPage" aria-expanded="false" aria-controls="navlayoutPage">
                            <i class="nav-icon me-2 icon-xxs" data-feather="file"></i> Pages
                        </a>
                        <div id="navlayoutPage" class="collapse  " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/starter.html">
                                        Starter </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/pricing.html">
                                        Pricing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/maintenance.html">
                                        Maintenance
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/404-error.html">
                                        404 Error
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/404-error.html">
                                        Coming Soon
                                    </a>
                                </li>












                            </ul>
                        </div>
                    </li>



                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navAuthentication" aria-expanded="false"
                            aria-controls="navAuthentication">
                            <i data-feather="lock" class="nav-icon me-2 icon-xxs">
                            </i> Authentication
                        </a>
                        <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/sign-in.html"> Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="../../pages/sign-up.html"> Sign Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/forget-password.html">
                                        Forget Password
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navLayouts" aria-expanded="false" aria-controls="navLayouts">
                            <i data-feather="sidebar" class="nav-icon me-2 icon-xxs">
                            </i> Layouts
                        </a>
                        <div id="navLayouts" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link  " href="../../index.html"> Default</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="../../horizontal/index.html"> Horizontal</a>
                                </li>


                            </ul>
                        </div>
                    </li>


                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">UI Components</div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navComponents" aria-expanded="false" aria-controls="navComponents">
                            <i data-feather="package" class="nav-icon me-2 icon-xxs">
                            </i> Components
                        </a>
                        <div id="navComponents" class="collapse  show " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a href="../../pages/components/accordions.html" class="nav-link ">
                                        Accordions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../../pages/components/alerts.html"> Alert</a>
                                </li>

                                <li class="nav-item">
                                    <a href="../../pages/components/badge.html" class="nav-link ">
                                        Badge
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="../../pages/components/breadcrumb.html" class="nav-link ">
                                        Breadcrumb
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/buttons.html" class="nav-link ">
                                        Buttons
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/button-group.html" class="nav-link ">
                                        Button group
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/card.html" class="nav-link ">
                                        Card
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/carousel.html" class="nav-link ">
                                        Carousel
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/close-button.html" class="nav-link ">
                                        Close Button
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/collapse.html" class="nav-link ">
                                        Collapse
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/dropdowns.html" class="nav-link ">
                                        Dropdowns
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/forms.html" class="nav-link  active ">
                                        Forms
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="../../pages/components/list-group.html" class="nav-link ">
                                        List group
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="../../pages/components/modal.html" class="nav-link ">
                                        Modal
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/navs-tabs.html" class="nav-link ">
                                        Navs and tabs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/navbar.html" class="nav-link ">
                                        Navbar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/offcanvas.html" class="nav-link ">
                                        Offcanvas
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/pagination.html" class="nav-link ">
                                        Pagination
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/placeholders.html" class="nav-link ">
                                        Placeholders
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/popovers.html" class="nav-link ">
                                        Popovers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/progress.html" class="nav-link ">
                                        Progress
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/scrollspy.html" class="nav-link ">
                                        Scrollspy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/spinners.html" class="nav-link ">
                                        Spinners
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/tables.html" class="nav-link ">
                                        Tables
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/toasts.html" class="nav-link ">
                                        Toasts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/components/tooltips.html" class="nav-link ">
                                        Tooltips
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                            <i data-feather="corner-left-down" class="nav-icon me-2 icon-xxs">
                            </i> Menu Level
                        </a>
                        <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse"
                                        data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                                        aria-controls="navMenuLevelSecond">
                                        Two Level
                                    </a>
                                    <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link " href="#!">
                                                    NavItem 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#!">
                                                    NavItem 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link has-arrow  collapsed  " href="#!"
                                        data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree"
                                        aria-expanded="false" aria-controls="navMenuLevelThree">
                                        Three Level
                                    </a>
                                    <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link  collapsed " href="#!"
                                                    data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne"
                                                    aria-expanded="false" aria-controls="navMenuLevelThreeOne">
                                                    NavItem 1
                                                </a>
                                                <div id="navMenuLevelThreeOne" class="collapse collapse "
                                                    data-bs-parent="#navMenuLevelThree">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="#!">
                                                                NavChild Item 1
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#!">
                                                    Nav Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Documentation</div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navDocs" aria-expanded="false" aria-controls="navDocs">
                            <i data-feather="package" class="nav-icon me-2 icon-xxs">
                            </i> Docs
                        </a>
                        <div id="navDocs" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">

                                <li class="nav-item"><a href="../../docs/index.html"
                                        class="nav-link  ">Introduction</a></li>
                                <li class="nav-item"><a href="../../docs/environment-setup.html"
                                        class="nav-link ">Environment setup</a></li>
                                <li class="nav-item"><a href="../../docs/working-with-gulp.html"
                                        class="nav-link  ">Working with Gulp</a>
                                </li>
                                <li class="nav-item"><a href="../../docs/compiled-files.html"
                                        class="nav-link ">Compiled Files</a>
                                </li>
                                <li class="nav-item"><a href="../../docs/file-structure.html" class="nav-link ">File
                                        Structure</a></li>
                                <li class="nav-item"><a href="../../docs/resources-assets.html"
                                        class="nav-link ">Resources & assets</a></li>
                                <li class="nav-item"><a href="../../docs/changelog.html"
                                        class="nav-link ">Changelog</a></li>


                            </ul>
                        </div>
                    </li>

                </ul>
                <div class="card bg-light shadow-none text-center mx-4 my-8">
                    <div class="card-body py-6">
                        <img src="{{ asset('admin/images/background/giftbox.png') }}"
                            alt="dash ui - admin dashboard template">
                        <div class="mt-4">
                            <h5>Unlimited Access</h5>
                            <p class="fs-6 mb-4">
                                Upgrade your plan from a Free trial, to select Business Plan. Start Now
                            </p>
                            <a href="#" class="btn btn-secondary btn-sm">Upgrade Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Page Content -->



        <div id="app-content">
            <div class="app-content-area">
                <!-- Container fluid -->
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-xl-9 col-md-12 col-sm-12 col-12 ">
                            <!-- Content -->
                            <div class="">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-8" id="intro">
                                            <h1 class="mb-0 h2 ">Forms</h1>
                                            <p class="mb-0 text-muted">Examples and usage guidelines for form control
                                                styles, layout
                                                options, and custom components for creating a wide variety of forms.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- basic-forms -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div id="basicForm" class="mb-4">
                                            <h2 class="h3 mb-1">Form Control</h2>
                                            <p>Textual form controls—like <code>&lt;input&gt;</code>s,
                                                <code>&lt;select&gt;</code>s, and <code>&lt;textarea&gt;</code>s—are
                                                styled with the
                                                <code>.form-control</code> class. Included are styles for general
                                                appearance, focus state,
                                                sizing,
                                                and more.
                                            </p>
                                        </div>
                                        <!-- Card -->
                                        <div class="mb-6 ">
                                            <h3 class="h4 mb-3" id="input">Input</h3>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-basic-forms"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-basic-forms-design-tab"
                                                            data-bs-toggle="pill" href="#pills-basic-forms-design"
                                                            role="tab" aria-controls="pills-basic-forms-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-basic-forms-html-tab"
                                                            data-bs-toggle="pill" href="#pills-basic-forms-html"
                                                            role="tab" aria-controls="pills-basic-forms-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab content -->
                                                <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-design-tab">

                                                        <!-- Input -->
                                                        <div class="mb-3">
                                                            <label class="form-label" for="textInput">Input</label>
                                                            <input type="text" id="textInput" class="form-control"
                                                                placeholder="Input Text">
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-html-tab">

                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- Input --&gt;</span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>textInput<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Input<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>textInput<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Input Text<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <h3 class="h4 mb-3" id="email">Email</h3>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-basic-forms-email"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-basic-forms-email-design-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-email-design" role="tab"
                                                            aria-controls="pills-basic-forms-email-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-basic-forms-email-html-tab"
                                                            data-bs-toggle="pill" href="#pills-basic-forms-email-html"
                                                            role="tab"
                                                            aria-controls="pills-basic-forms-email-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab content -->
                                                <div class="tab-content p-4" id="pills-tabContent-basic-forms-email">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-email-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-email-design-tab">

                                                        <!-- Email -->
                                                        <div class="mb-3">
                                                            <label class="form-label" for="email">Email</label>
                                                            <input type="email" id="email" class="form-control"
                                                                placeholder="email@example.com">
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-email-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-email-html-tab">

                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- Email --&gt;</span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>email<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Email<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>email<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>email<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>email@example.com<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <h3 class="h4 mb-3" id="password">Password</h3>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-basic-forms-password"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-basic-forms-password-design-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-password-design" role="tab"
                                                            aria-controls="pills-basic-forms-password-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-basic-forms-password-html-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-password-html" role="tab"
                                                            aria-controls="pills-basic-forms-password-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab content -->
                                                <div class="tab-content p-4"
                                                    id="pills-tabContent-basic-forms-password">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-password-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-password-design-tab">

                                                        <!-- Passowrd -->
                                                        <div class="mb-3">
                                                            <label class="form-label" for="password">Password</label>
                                                            <input type="password" id="password"
                                                                class="form-control" value="passwordexample">
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-password-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-password-html-tab">

                                                        <pre><code class="  language-markup">    <span class="token comment">&lt;!-- Passowrd --&gt;</span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>password<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Password<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                              <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>password<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>password<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>passwordexample<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <h3 class="h4 mb-3" id="textarea">Textarea</h3>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-basic-forms-textarea"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-basic-forms-textarea-design-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-textarea-design" role="tab"
                                                            aria-controls="pills-basic-forms-textarea-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-basic-forms-textarea-html-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-textarea-html" role="tab"
                                                            aria-controls="pills-basic-forms-textarea-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab content -->
                                                <div class="tab-content p-4"
                                                    id="pills-tabContent-basic-forms-textarea">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-textarea-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-textarea-design-tab">

                                                        <!-- Textarea -->
                                                        <div class="mb-3">
                                                            <label for="textarea-input"
                                                                class="form-label">Textarea</label>
                                                            <textarea class="form-control" id="textarea-input" rows="5">Hello World!</textarea>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-textarea-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-textarea-html-tab">

                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- Textarea --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>textarea-input<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Textarea<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>textarea</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>textarea-input<span class="token punctuation">"</span></span> <span class="token attr-name">rows</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Hello World!<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>textarea</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-6">
                                            <h3 class="h4 mb-3" id="search">Search</h3>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-basic-forms-search"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-basic-forms-search-design-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-search-design" role="tab"
                                                            aria-controls="pills-basic-forms-search-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-basic-forms-search-html-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-search-html" role="tab"
                                                            aria-controls="pills-basic-forms-search-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab content -->
                                                <div class="tab-content p-4"
                                                    id="pills-tabContent-basic-forms-search">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-search-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-search-design-tab">

                                                        <!-- Search input -->
                                                        <div class="mb-3">
                                                            <label for="search-input"
                                                                class="form-label">Search</label>
                                                            <input class="form-control" type="search"
                                                                id="search-input" value="Search components">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-search-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-search-html-tab">

                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- Search input --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>search-input<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Search<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>search<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>search-input<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Search components<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  </code></pre>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <h3 class="h4 mb-3" id="url">Url</h3>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-basic-forms-url"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-basic-forms-url-design-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-url-design" role="tab"
                                                            aria-controls="pills-basic-forms-url-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-basic-forms-url-html-tab"
                                                            data-bs-toggle="pill" href="#pills-basic-forms-url-html"
                                                            role="tab"
                                                            aria-controls="pills-basic-forms-url-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab content -->
                                                <div class="tab-content p-4" id="pills-tabContent-basic-forms-url">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-url-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-url-design-tab">

                                                        <!-- URL Input -->
                                                        <div class="mb-3">
                                                            <label for="url-input" class="form-label">URL</label>
                                                            <input class="form-control" type="url"
                                                                id="url-input" value="https://getbootstrap.com">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-url-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-url-html-tab">

                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- URL Input --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>url-input<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>URL<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>url<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>url-input<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>https://getbootstrap.com<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <h3 class="h4 mb-3" id="phone">Phone</h3>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-basic-forms-phone"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-basic-forms-phone-design-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-phone-design" role="tab"
                                                            aria-controls="pills-basic-forms-phone-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-basic-forms-phone-html-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-phone-html" role="tab"
                                                            aria-controls="pills-basic-forms-phone-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab content -->
                                                <div class="tab-content p-4"
                                                    id="pills-tabContent-basic-forms-phone">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-phone-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-phone-design-tab">

                                                        <!-- Phone Input -->
                                                        <div class="mb-3">
                                                            <label for="telinput" class="form-label">Phone</label>
                                                            <input class="form-control" type="tel"
                                                                id="telinput" value="+91 12 3456 7890">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-phone-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-phone-html-tab">
                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- Phone Input --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>telinput<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Phone<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>tel<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>telinput<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>+91 12 3456 7890<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- basic-forms -->

                                <!-- sizing -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div id="sizing" class="mb-4">
                                            <h2 class="h3 mb-1">Sizing</h2>
                                            <p>Set heights using classes like <code
                                                    class="highlighter-rouge">.form-control-lg</code> and
                                                <code class="highlighter-rouge">.form-control-sm</code>.
                                            </p>
                                        </div>
                                        <!-- Card -->
                                        <div class="mb-10 card">
                                            <ul class="nav nav-line-bottom" id="pills-tab-sizing" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-sizing-design-tab"
                                                        data-bs-toggle="pill" href="#pills-sizing-design"
                                                        role="tab" aria-controls="pills-sizing-design"
                                                        aria-selected="true">Design</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-sizing-html-tab"
                                                        data-bs-toggle="pill" href="#pills-sizing-html"
                                                        role="tab" aria-controls="pills-sizing-html"
                                                        aria-selected="false">HTML</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content p-4" id="pills-tabContent-sizing">
                                                <div class="tab-pane tab-example-design fade show active"
                                                    id="pills-sizing-design" role="tabpanel"
                                                    aria-labelledby="pills-sizing-design-tab">
                                                    <!-- large input -->
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control form-control-lg"
                                                            placeholder="Large input">
                                                    </div>
                                                    <!-- normal input -->
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="Normal input">
                                                    </div>
                                                    <!-- small input -->
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Small input">
                                                    </div>
                                                </div>
                                                <div class="tab-pane tab-example-html fade " id="pills-sizing-html"
                                                    role="tabpanel" aria-labelledby="pills-sizing-html-tab">
                                                    <pre><code class="language-markup"><span class="token comment">&lt;!-- large input --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control form-control-lg<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Large input<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
     <span class="token comment">&lt;!-- normal input --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Normal input<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token comment">&lt;!-- small input --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control form-control-sm<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Small input<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- sizing -->

                                <!-- select-sizes -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-6 ">
                                            <h2 class="h3 mb-1" id="select">Select</h2>
                                            <p>Customize the native <code>&lt;select&gt;</code>s with custom CSS that
                                                changes the element’s
                                                initial
                                                appearance.</p>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-basic-forms-select"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-basic-forms-select-design-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-select-design" role="tab"
                                                            aria-controls="pills-basic-forms-select-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-basic-forms-select-html-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-select-html" role="tab"
                                                            aria-controls="pills-basic-forms-select-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab content -->
                                                <div class="tab-content p-4"
                                                    id="pills-tabContent-basic-forms-select">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-select-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-select-design-tab">

                                                        <!-- Select Option -->
                                                        <div class="mb-3">
                                                            <label class="form-label" for="selectOne">Select <span
                                                                    class="text-secondary">(Optional)</span></label>
                                                            <select class="form-select"
                                                                aria-label="Default select example">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-select-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-select-html-tab">
                                                        <pre><code class="language-markup">
  <span class="token comment">&lt;!-- Select Option --&gt;</span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>selectOne<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Select <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span>
     <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>(Optional)<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-select<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Default select example<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">selected</span><span class="token punctuation">&gt;</span></span>Open this select menu<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>One<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Two<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Three<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-10">
                                            <h3 class="h4 mb-1" id="multiple">Multiple Select</h3>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom"
                                                    id="pills-tab-basic-forms-multi-select" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-basic-forms-multi-select-design-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-multi-select-design"
                                                            role="tab"
                                                            aria-controls="pills-basic-forms-multi-select-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            id="pills-basic-forms-multi-select-html-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-basic-forms-multi-select-html"
                                                            role="tab"
                                                            aria-controls="pills-basic-forms-multi-select-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Tab content -->
                                                <div class="tab-content p-4"
                                                    id="pills-tabContent-basic-forms-multi-select">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-basic-forms-multi-select-design" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-multi-select-design-tab">

                                                        <!-- Mulitple Select Option -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Multiple
                                                                select</label>
                                                            <select class="form-select" multiple
                                                                aria-label="multiple select example">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-basic-forms-multi-select-html" role="tabpanel"
                                                        aria-labelledby="pills-basic-forms-multi-select-html-tab">
                                                        <pre><code class="language-markup">
  <span class="token comment">&lt;!-- Select Option --&gt;</span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>selectOne<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Select <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span>
     <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>(Optional)<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-select<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Default select example<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">selected</span><span class="token punctuation">&gt;</span></span>Open this select menu<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>One<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Two<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Three<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-4" id="select-size">
                                            <h2 class="h3 mb-1">Select Menu Sizes</h2>
                                            <p>You may also choose from small and large custom selects to match our
                                                similarly sized text
                                                inputs.
                                            </p>
                                        </div>


                                        <!-- Card -->
                                        <div class="mb-10 card">
                                            <ul class="nav nav-line-bottom" id="pills-tab-select-sizes"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-select-sizes-design-tab"
                                                        data-bs-toggle="pill" href="#pills-select-sizes-design"
                                                        role="tab" aria-controls="pills-select-sizes-design"
                                                        aria-selected="true">Design</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-select-sizes-html-tab"
                                                        data-bs-toggle="pill" href="#pills-select-sizes-html"
                                                        role="tab" aria-controls="pills-select-sizes-html"
                                                        aria-selected="false">HTML</a>
                                                </li>
                                            </ul>
                                            <!-- Content -->
                                            <div class="tab-content p-4" id="pills-tabContent-select-sizes">
                                                <div class="tab-pane tab-example-design fade show active"
                                                    id="pills-select-sizes-design" role="tabpanel"
                                                    aria-labelledby="pills-select-sizes-design-tab">
                                                    <!-- Select Large -->
                                                    <select class="form-select form-select-lg mb-3">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <!-- Select Small -->
                                                    <select class="form-select form-select-sm">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="tab-pane tab-example-html fade "
                                                    id="pills-select-sizes-html" role="tabpanel"
                                                    aria-labelledby="pills-select-sizes-html-tab">
                                                    <pre><code class="language-markup"><span class="token comment">&lt;!-- Select Large --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-select form-select-lg mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">selected</span><span class="token punctuation">&gt;</span></span>Open this select menu<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>One<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Two<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Three<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span>
   <span class="token comment">&lt;!-- Select Small --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-select form-select-sm<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">selected</span><span class="token punctuation">&gt;</span></span>Open this select menu<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>One<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Two<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Three<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span></code></pre>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- select-sizes -->


                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-4" id="select-menu">
                                            <h2 class="h3 mb-1" id="checks-radios">Checks and radios</h2>
                                            <p>Create consistent cross-browser and cross-device checkboxes and radios
                                                with our completely
                                                rewritten checks component.
                                            </p>
                                        </div>


                                        <!-- Card -->
                                        <div class="mb-6">
                                            <h3 class="h4 mb-3" id="checks">Checks</h3>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-checks"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-checks-design-tab"
                                                            data-bs-toggle="pill" href="#pills-checks-design"
                                                            role="tab" aria-controls="pills-checks-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-checks-html-tab"
                                                            data-bs-toggle="pill" href="#pills-checks-html"
                                                            role="tab" aria-controls="pills-checks-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Content -->
                                                <div class="tab-content p-4" id="pills-tabContent-checks">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-checks-design" role="tabpanel"
                                                        aria-labelledby="pills-select-sizes-design-tab">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Default checkbox
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckChecked" checked>
                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                Checked checkbox
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-checks-html" role="tabpanel"
                                                        aria-labelledby="pills-checks-html-tab">
                                                        <pre><code class="language-markup"> <span class="token comment">&lt;!-- Checks --&gt;</span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckDefault<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckDefault<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      Default checkbox
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckChecked<span class="token punctuation">"</span></span> <span class="token attr-name">checked</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckChecked<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        Checked checkbox
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <h3 class="h4 mb-1" id="indeterminate">Indeterminate</h3>
                                            <p>Checkboxes can utilize the <code>:indeterminate</code> pseudo class when
                                                manually set via
                                                JavaScript (there is no available HTML attribute for specifying it).</p>

                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-indeterminate"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-indeterminate-design-tab"
                                                            data-bs-toggle="pill" href="#pills-indeterminate-design"
                                                            role="tab"
                                                            aria-controls="pills-indeterminate-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-indeterminate-html-tab"
                                                            data-bs-toggle="pill" href="#pills-indeterminate-html"
                                                            role="tab" aria-controls="pills-indeterminate-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Content -->
                                                <div class="tab-content p-4" id="pills-tabContent-indeterminate">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-indeterminate-design" role="tabpanel"
                                                        aria-labelledby="pills-select-sizes-design-tab">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckIndeterminate">
                                                            <label class="form-check-label"
                                                                for="flexCheckIndeterminate">
                                                                Indeterminate checkbox
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-indeterminate-html" role="tabpanel"
                                                        aria-labelledby="pills-indeterminate-html-tab">
                                                        <pre><code class="language-markup"> <span class="token comment">&lt;!-- Checks --&gt;</span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckDefault<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckDefault<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      Default checkbox
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckChecked<span class="token punctuation">"</span></span> <span class="token attr-name">checked</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckChecked<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        Checked checkbox
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <h3 class="h4 mb-3" id="disabled-check">Disabled</h3>
                                            <p>Add the <code>disabled</code> attribute and the associated
                                                <code>&lt;label&gt;</code>s are
                                                automatically styled to match with a lighter color to help indicate the
                                                input’s state.</p>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-disabled-check"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-disabled-check-design-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-disabled-check-design" role="tab"
                                                            aria-controls="pills-disabled-check-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-disabled-check-html-tab"
                                                            data-bs-toggle="pill" href="#pills-disabled-check-html"
                                                            role="tab" aria-controls="pills-disabled-check-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Content -->
                                                <div class="tab-content p-4" id="pills-tabContent-disabled-check">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-disabled-check-design" role="tabpanel"
                                                        aria-labelledby="pills-select-sizes-design-tab">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDisabled" disabled>
                                                            <label class="form-check-label" for="flexCheckDisabled">
                                                                Disabled checkbox
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckCheckedDisabled" checked
                                                                disabled>
                                                            <label class="form-check-label"
                                                                for="flexCheckCheckedDisabled">
                                                                Disabled checked checkbox
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-disabled-check-html" role="tabpanel"
                                                        aria-labelledby="pills-disabled-check-html-tab">
                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- disabled --&gt;</span>
                                          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckDisabled<span class="token punctuation">"</span></span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span>
                                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckDisabled<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                              Disabled checkbox
                                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                                          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckCheckedDisabled<span class="token punctuation">"</span></span> <span class="token attr-name">checked</span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span>
                                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexCheckCheckedDisabled<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                              Disabled checked checkbox
                                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
                                          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-6">
                                            <h3 class="h4 mb-1" id="radios">Radios</h3>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-radio"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-radio-design-tab"
                                                            data-bs-toggle="pill" href="#pills-radio-design"
                                                            role="tab" aria-controls="pills-radio-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-radio-html-tab"
                                                            data-bs-toggle="pill" href="#pills-radio-html"
                                                            role="tab" aria-controls="pills-radio-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Content -->
                                                <div class="tab-content p-4" id="pills-tabContent-radio">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-radio-design" role="tabpanel"
                                                        aria-labelledby="pills-select-sizes-design-tab">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Default radio
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault2"
                                                                checked>
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Default checked radio
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-radio-html" role="tabpanel"
                                                        aria-labelledby="pills-radio-html-tab">
                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- radio--&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>radio<span class="token punctuation">"</span></span> <span class="token attr-name">name</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioDefault<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioDefault1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioDefault1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       Default radio
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>radio<span class="token punctuation">"</span></span> <span class="token attr-name">name</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioDefault<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioDefault2<span class="token punctuation">"</span></span> <span class="token attr-name">checked</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioDefault2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       Default checked radio
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <h3 class="h4 mb-1" id="disabled-radio">Disabled</h3>
                                            <p>Add the <code>disabled</code> attribute and the associated
                                                <code>&lt;label&gt;</code>s are
                                                automatically styled to match with a lighter color to help indicate the
                                                input’s state.</p>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-radio-disabled"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active"
                                                            id="pills-radio-disabled-design-tab"
                                                            data-bs-toggle="pill"
                                                            href="#pills-radio-disabled-design" role="tab"
                                                            aria-controls="pills-radio-disabled-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-radio-disabled-html-tab"
                                                            data-bs-toggle="pill" href="#pills-radio-disabled-html"
                                                            role="tab" aria-controls="pills-radio-disabled-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Content -->
                                                <div class="tab-content p-4" id="pills-tabContent-radio-disabled">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-radio-disabled-design" role="tabpanel"
                                                        aria-labelledby="pills-select-sizes-design-tab">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDisabled" id="flexRadioDisabled"
                                                                disabled>
                                                            <label class="form-check-label" for="flexRadioDisabled">
                                                                Disabled radio
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDisabled"
                                                                id="flexRadioCheckedDisabled" checked disabled>
                                                            <label class="form-check-label"
                                                                for="flexRadioCheckedDisabled">
                                                                Disabled checked radio
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-radio-disabled-html" role="tabpanel"
                                                        aria-labelledby="pills-radio-disabled-html-tab">
                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- disabled --&gt;</span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>radio<span class="token punctuation">"</span></span> <span class="token attr-name">name</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioDisabled<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioDisabled<span class="token punctuation">"</span></span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioDisabled<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    Disabled radio
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>radio<span class="token punctuation">"</span></span> <span class="token attr-name">name</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioDisabled<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioCheckedDisabled<span class="token punctuation">"</span></span> <span class="token attr-name">checked</span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexRadioCheckedDisabled<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    Disabled checked radio
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-10">
                                            <h2 class="h3 mb-1" id="switches">Switches</h2>
                                            <p>A switch has the markup of a custom checkbox but uses the
                                                <code>.form-switch</code> class to
                                                render a toggle switch. Consider using <code>role="switch"</code> to
                                                more accurately convey the
                                                nature of the control to assistive technologies that support this role.
                                                In older assistive
                                                technologies, it will simply be announced as a regular checkbox as a
                                                fallback. Switches also
                                                support the <code>disabled</code> attribute.</p>
                                            <div class="card">
                                                <ul class="nav nav-line-bottom" id="pills-tab-switches"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="pills-switches-design-tab"
                                                            data-bs-toggle="pill" href="#pills-switches-design"
                                                            role="tab" aria-controls="pills-switches-design"
                                                            aria-selected="true">Design</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-switches-html-tab"
                                                            data-bs-toggle="pill" href="#pills-switches-html"
                                                            role="tab" aria-controls="pills-switches-html"
                                                            aria-selected="false">HTML</a>
                                                    </li>
                                                </ul>
                                                <!-- Content -->
                                                <div class="tab-content p-4" id="pills-tabContent-switches">
                                                    <div class="tab-pane tab-example-design fade show active"
                                                        id="pills-switches-design" role="tabpanel"
                                                        aria-labelledby="pills-select-sizes-design-tab">
                                                        <div class="form-check form-switch mb-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="flexSwitchCheckDefault">
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckDefault">Default switch checkbox
                                                                input</label>
                                                        </div>
                                                        <div class="form-check form-switch  mb-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="flexSwitchCheckChecked" checked>
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckChecked">Checked switch checkbox
                                                                input</label>
                                                        </div>
                                                        <div class="form-check form-switch  mb-2">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="flexSwitchCheckDisabled"
                                                                disabled>
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckDisabled">Disabled switch checkbox
                                                                input</label>
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="flexSwitchCheckCheckedDisabled"
                                                                checked disabled>
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckCheckedDisabled">Disabled checked
                                                                switch
                                                                checkbox input</label>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane tab-example-html fade "
                                                        id="pills-switches-html" role="tabpanel"
                                                        aria-labelledby="pills-switches-html-tab">
                                                        <pre><code class="language-markup"><span class="token comment">&lt;!-- Switches --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check form-switch mb-2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>switch<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexSwitchCheckDefault<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexSwitchCheckDefault<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Default switch checkbox input<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check form-switch  mb-2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>switch<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexSwitchCheckChecked<span class="token punctuation">"</span></span> <span class="token attr-name">checked</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexSwitchCheckChecked<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Checked switch checkbox input<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check form-switch  mb-2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>switch<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexSwitchCheckDisabled<span class="token punctuation">"</span></span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexSwitchCheckDisabled<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Disabled switch checkbox input<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check form-switch<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>switch<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexSwitchCheckCheckedDisabled<span class="token punctuation">"</span></span> <span class="token attr-name">checked</span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flexSwitchCheckCheckedDisabled<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Disabled checked switch checkbox input<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- validation -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div id="validation" class="mb-4">
                                            <h2 class="h3 mb-1">Validation states</h2>
                                            <p>It provides valuable, actionable feedback to your users with HTML5 form
                                                validation.
                                            </p>
                                        </div>
                                        <!-- Card -->
                                        <div class="mb-10 card">
                                            <ul class="nav nav-line-bottom" id="pills-tab-validation"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-validation-design-tab"
                                                        data-bs-toggle="pill" href="#pills-validation-design"
                                                        role="tab" aria-controls="pills-validation-design"
                                                        aria-selected="true">Design</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-validation-html-tab"
                                                        data-bs-toggle="pill" href="#pills-validation-html"
                                                        role="tab" aria-controls="pills-validation-html"
                                                        aria-selected="false">HTML</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content p-4" id="pills-tabContent-validation">
                                                <div class="tab-pane tab-example-design fade show active"
                                                    id="pills-validation-design" role="tabpanel"
                                                    aria-labelledby="pills-validation-design-tab">
                                                    <form class="row g-3 needs-validation" novalidate>
                                                        <div class="col-md-4">
                                                            <label for="validationCustom01" class="form-label">First
                                                                name</label>
                                                            <input type="text" class="form-control"
                                                                id="validationCustom01" value="Mark" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="validationCustom02" class="form-label">Last
                                                                name</label>
                                                            <input type="text" class="form-control"
                                                                id="validationCustom02" value="Otto" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="validationCustomUsername"
                                                                class="form-label">Username</label>
                                                            <div class="input-group has-validation">
                                                                <span class="input-group-text"
                                                                    id="inputGroupPrepend">@</span>
                                                                <input type="text" class="form-control"
                                                                    id="validationCustomUsername"
                                                                    aria-describedby="inputGroupPrepend" required>
                                                                <div class="invalid-feedback">
                                                                    Please choose a username.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="validationCustom03"
                                                                class="form-label">City</label>
                                                            <input type="text" class="form-control"
                                                                id="validationCustom03" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid city.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="validationCustom04"
                                                                class="form-label">State</label>
                                                            <select class="form-select" id="validationCustom04"
                                                                required>
                                                                <option selected disabled value="">Choose...
                                                                </option>
                                                                <option>...</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please select a valid state.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="validationCustom05"
                                                                class="form-label">Zip</label>
                                                            <input type="text" class="form-control"
                                                                id="validationCustom05" required>
                                                            <div class="invalid-feedback">
                                                                Please provide a valid zip.
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="invalidCheck" required>
                                                                <label class="form-check-label" for="invalidCheck">
                                                                    Agree to terms and conditions
                                                                </label>
                                                                <div class="invalid-feedback">
                                                                    You must agree before submitting.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn btn-primary" type="submit">Submit
                                                                form</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane tab-example-html fade "
                                                    id="pills-validation-html" role="tabpanel"
                                                    aria-labelledby="pills-validation-html-tab">
                                                    <pre><code class="language-markup"><span class="token comment">&lt;!-- Validation Form --&gt;</span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>form</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>row g-3 needs-validation<span class="token punctuation">"</span></span> <span class="token attr-name">novalidate</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom01<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>First name<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom01<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Mark<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>valid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        Looks good!
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom02<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Last name<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom02<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Otto<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>valid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        Looks good!
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustomUsername<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Username<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>input-group has-validation<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>input-group-text<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>inputGroupPrepend<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>@<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustomUsername<span class="token punctuation">"</span></span> <span class="token attr-name">aria-describedby</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>inputGroupPrepend<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          Please choose a username.
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom03<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>City<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom03<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        Please provide a valid city.
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom04<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>State<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-select<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom04<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">selected</span> <span class="token attr-name">disabled</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Choose...<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span><span class="token punctuation">&gt;</span></span>...<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        Please select a valid state.
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-md-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom05<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Zip<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>validationCustom05<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        Please provide a valid zip.
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-12<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalidCheck<span class="token punctuation">"</span></span> <span class="token attr-name">required</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalidCheck<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          Agree to terms and conditions
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>invalid-feedback<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          You must agree before submitting.
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-12<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>btn btn-primary<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>submit<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Submit form<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>form</span><span class="token punctuation">&gt;</span></span></code></pre>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- validation -->

                                <!-- disabled -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div id="disiabledState" class="mb-4">
                                            <h2 class="h3 mb-1">Disabled & Readonly Fields</h2>
                                            <p>Use <code>readonly</code> or <code>disabled</code> attributes for
                                                <code>.form-control</code>
                                            </p>
                                        </div>
                                        <!-- Card -->
                                        <div class="card mb-10">
                                            <ul class="nav nav-line-bottom" id="pills-tab-disabled"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-disabled-design-tab"
                                                        data-bs-toggle="pill" href="#pills-disabled-design"
                                                        role="tab" aria-controls="pills-disabled-design"
                                                        aria-selected="true">Design</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-disabled-html-tab"
                                                        data-bs-toggle="pill" href="#pills-disabled-html"
                                                        role="tab" aria-controls="pills-disabled-html"
                                                        aria-selected="false">HTML</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content p-4" id="pills-tabContent-disabled">
                                                <div class="tab-pane tab-example-design fade show active"
                                                    id="pills-disabled-design" role="tabpanel"
                                                    aria-labelledby="pills-disabled-design-tab">
                                                    <form>
                                                        <fieldset disabled>
                                                            <legend>Disabled fieldset example</legend>
                                                            <div class="mb-3">
                                                                <label for="disabledTextInput"
                                                                    class="form-label">Disabled input</label>
                                                                <input type="text" id="disabledTextInput"
                                                                    class="form-control"
                                                                    placeholder="Disabled input">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="disabledSelect"
                                                                    class="form-label">Disabled select menu</label>
                                                                <select id="disabledSelect" class="form-select">
                                                                    <option>Disabled select</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="disabledFieldsetCheck" disabled>
                                                                    <label class="form-check-label"
                                                                        for="disabledFieldsetCheck">
                                                                        Can't check this
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <div class="tab-pane tab-example-html fade "
                                                    id="pills-disabled-html" role="tabpanel"
                                                    aria-labelledby="pills-disabled-html-tab">
                                                    <pre><code class="language-markup"><span class="token comment">&lt;!-- Disabled Input --&gt;</span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>form</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>fieldset</span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>legend</span><span class="token punctuation">&gt;</span></span>Disabled fieldset example<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>legend</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledTextInput<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Disabled input<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledTextInput<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Disabled input<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledSelect<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Disabled select menu<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledSelect<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-select<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span><span class="token punctuation">&gt;</span></span>Disabled select<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-input<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>checkbox<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledFieldsetCheck<span class="token punctuation">"</span></span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-check-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledFieldsetCheck<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            Can't check this
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>submit<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>btn btn-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Submit<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>fieldset</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>form</span><span class="token punctuation">&gt;</span></span></code></pre>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Disabled -->

                                <!-- Range -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div id="range" class="mb-4">
                                            <h2 class="h3 mb-1">Range</h2>
                                            <p>Create custom <code class="highlighter-rouge">&lt;input
                                                    type="range"&gt;</code> controls with <code
                                                    class="highlighter-rouge">.custom-range.</code>
                                                The
                                                track (the background) and thumb (the value) are both styled to appear
                                                the same across browsers.
                                                As only IE
                                                and Firefox support “filling” their track from the left or right of the
                                                thumb as a means to
                                                visually indicate progress, we do not currently support it.</p>
                                        </div>
                                        <!-- Card -->
                                        <div class="mb-6 card">
                                            <ul class="nav nav-line-bottom " id="pills-tab-range" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-range-design-tab"
                                                        data-bs-toggle="pill" href="#pills-range-design"
                                                        role="tab" aria-controls="pills-range-design"
                                                        aria-selected="true">Design</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-range-html-tab"
                                                        data-bs-toggle="pill" href="#pills-range-html"
                                                        role="tab" aria-controls="pills-range-html"
                                                        aria-selected="false">HTML</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content p-4" id="pills-tabContent-range">
                                                <div class="tab-pane tab-example-design fade show active"
                                                    id="pills-range-design" role="tabpanel"
                                                    aria-labelledby="pills-range-design-tab">
                                                    <label for="customRange1" class="form-label">Example
                                                        range</label>
                                                    <input type="range" class="form-range" id="customRange1">
                                                </div>
                                                <div class="tab-pane tab-example-html fade " id="pills-range-html"
                                                    role="tabpanel" aria-labelledby="pills-range-html-tab">
                                                    <pre><code class="language-markup"> <span class="token comment">&lt;!-- range --&gt;</span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange1<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Example range<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>range<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-range<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></code></pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Range -->
                                <!-- Range second -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-4">
                                            <h3 class="h4 mb-1">Disabled</h3>
                                            <p>Add the <code>disabled</code> boolean attribute on an input to give it a
                                                grayed out appearance
                                                and remove pointer events.</p>
                                        </div>
                                        <!-- Card -->
                                        <div class="mb-6 card">
                                            <ul class="nav nav-line-bottom" id="pills-tab-range-second"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-range-second-design-tab"
                                                        data-bs-toggle="pill" href="#pills-range-second-design"
                                                        role="tab" aria-controls="pills-range-second-design"
                                                        aria-selected="true">Design</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-range-second-html-tab"
                                                        data-bs-toggle="pill" href="#pills-range-second-html"
                                                        role="tab" aria-controls="pills-range-second-html"
                                                        aria-selected="false">HTML</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content p-4" id="pills-tabContent-range-second">
                                                <div class="tab-pane tab-example-design fade show active"
                                                    id="pills-range-second-design" role="tabpanel"
                                                    aria-labelledby="pills-range-second-design-tab">
                                                    <label for="disabledRange" class="form-label">Disabled
                                                        range</label>
                                                    <input type="range" class="form-range" id="disabledRange"
                                                        disabled>
                                                </div>
                                                <div class="tab-pane tab-example-html fade "
                                                    id="pills-range-second-html" role="tabpanel"
                                                    aria-labelledby="pills-range-second-html-tab">

                                                    <pre><code class="language-markup"><span class="token comment">&lt;!-- Disabled --&gt;</span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledRange<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Disabled range<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>range<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-range<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>disabledRange<span class="token punctuation">"</span></span> <span class="token attr-name">disabled</span><span class="token punctuation">&gt;</span></span></code></pre>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Range second -->
                                <!-- Range third -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-4">
                                            <h3 class="h4 mb-1">Mix and max</h3>
                                            <p>Add the <code>disabled</code> boolean attribute on an input to give it a
                                                grayed out appearance
                                                and remove pointer events.</p>
                                        </div>
                                        <!-- Card -->
                                        <div class="mb-6 card">
                                            <ul class="nav nav-line-bottom" id="pills-tab-range-third"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-range-third-design-tab"
                                                        data-bs-toggle="pill" href="#pills-range-third-design"
                                                        role="tab" aria-controls="pills-range-third-design"
                                                        aria-selected="true">Design</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-range-third-html-tab"
                                                        data-bs-toggle="pill" href="#pills-range-third-html"
                                                        role="tab" aria-controls="pills-range-third-html"
                                                        aria-selected="false">HTML</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content p-4" id="pills-tabContent-range-third">
                                                <div class="tab-pane tab-example-design fade show active"
                                                    id="pills-range-third-design" role="tabpanel"
                                                    aria-labelledby="pills-range-third-design-tab">
                                                    <label for="customRange2" class="form-label">Example
                                                        range</label>
                                                    <input type="range" class="form-range" min="0"
                                                        max="5" id="customRange2">
                                                </div>
                                                <div class="tab-pane tab-example-html fade"
                                                    id="pills-range-third-html" role="tabpanel"
                                                    aria-labelledby="pills-range-third-html-tab">
                                                    <pre><code class="language-markup"><span class="token comment">&lt;!-- mix and max range --&gt;</span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange2<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Example range<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>range<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-range<span class="token punctuation">"</span></span> <span class="token attr-name">min</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">max</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>5<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></code></pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tange third -->
                                <!-- Range fourth -->
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="mb-4">
                                            <h3 class="mb-1 h3">Steps</h3>
                                            <p>By default, range inputs “snap” to integer values. To change this, you
                                                can specify a
                                                <code>step</code> value. In the example below, we double the number of
                                                steps by using
                                                <code>step="0.5"</code>.
                                            </p>
                                        </div>
                                        <!-- Card -->
                                        <div class="card mb-10">
                                            <ul class="nav nav-line-bottom " id="pills-tab-range-fourth"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-range-fourth-design-tab"
                                                        data-bs-toggle="pill" href="#pills-range-fourth-design"
                                                        role="tab" aria-controls="pills-range-fourth-design"
                                                        aria-selected="true">Design</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-range-fourth-html-tab"
                                                        data-bs-toggle="pill" href="#pills-range-fourth-html"
                                                        role="tab" aria-controls="pills-range-fourth-html"
                                                        aria-selected="false">HTML</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content p-4" id="pills-tabContent-range-fourth">
                                                <div class="tab-pane tab-example-design fade show active"
                                                    id="pills-range-fourth-design" role="tabpanel"
                                                    aria-labelledby="pills-range-fourth-design-tab">
                                                    <label for="customRange3" class="form-label">Example
                                                        range</label>
                                                    <input type="range" class="form-range" min="0"
                                                        max="5" step="0.5" id="customRange3">
                                                </div>
                                                <div class="tab-pane tab-example-html fade "
                                                    id="pills-range-fourth-html" role="tabpanel"
                                                    aria-labelledby="pills-range-fourth-html-tab">

                                                    <pre><code class="language-markup"><span class="token comment">&lt;!-- Steps --&gt;</span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange3<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-label<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Example range<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>range<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>form-range<span class="token punctuation">"</span></span> <span class="token attr-name">min</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">max</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>5<span class="token punctuation">"</span></span> <span class="token attr-name">step</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>0.5<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>customRange3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></code></pre>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tange third -->
                            </div>

                        </div>
                        <div
                            class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12  d-none d-xl-block position-fixed end-0">
                            <!-- Sidebar nav fixed -->
                            <div class="sidebar-nav-fixed">
                                <span class="px-4 mb-2 d-block text-uppercase ls-md h3 fs-6">Contents</span>
                                <ul class="list-unstyled">
                                    <li><a href="#intro" class="active">Introduction</a></li>
                                    <li><a href="#basicForm">Form control</a>
                                        <ul>
                                            <li><a href="#input">Input</a></li>
                                            <li><a href="#email">Email</a></li>
                                            <li><a href="#password">Password</a></li>
                                            <li><a href="#textarea">Textarea</a></li>
                                            <li><a href="#search">Search</a></li>
                                            <li><a href="#url">Url</a></li>
                                            <li><a href="#phone">Phone</a></li>

                                        </ul>

                                    </li>
                                    <li><a href="#sizing">Sizing</a></li>
                                    <li><a href="#select">Select menu</a>
                                        <ul>
                                            <li><a href="#multiple">Multiple Select</a></li>
                                            <li><a href="#select-size">Select Sizing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#checks-radios">Checks and radios</a>
                                        <ul>
                                            <li><a href="#checks">Checks</a></li>
                                            <li><a href="#indeterminate">Indeterminate</a></li>
                                            <li><a href="#disabled-check">Disabled</a></li>
                                            <li><a href="#radios">Radios</a></li>
                                            <li><a href="#disabled-radio">Disabled</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#switches">Switches</a></li>
                                    <li><a href="#validation">Validation</a></li>
                                    <li><a href="#disiabledState">Disabled</a></li>
                                    <li><a href="#range">Range</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Scripts -->
    <script src="{{ asset('admin/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('admin/libs/prismjs/plugins/toolbar/prism-toolbar.min.js') }}"></script>
    <script src="{{ asset('admin/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js') }}"></script>
    <!-- Libs JS -->
    <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/dist/simplebar.min.js') }}"></script>




    <!-- Theme JS -->
    <script src="{{ asset('admin/js/theme.min.js') }}"></script>

</body>

</html>
