@extends('layouts.master')

@section('content')


    <body>
        <!--wrapper-->
        <div class="wrapper">

            @include('layouts.partials.sidebar')

            <!--start header -->
            <header>
                <div class="topbar d-flex align-items-center">
                    <nav class="navbar navbar-expand">
                        <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                        </div>
                        <div class="top-menu ms-auto">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item mobile-search-icon">
                                    <a class="nav-link" href="#">	<i class='bx bx-search'></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
                                        <i class='bx bx-bell'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                            <div class="msg-header">
                                                <p class="msg-header-title">Notifications</p>
                                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                                            </div>
                                        </a>
                                        <div class="header-notifications-list">
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                                                    ago</span></h6>
                                                        <p class="msg-info">5 new user registered</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a href="javascript:;">
                                            <div class="text-center msg-footer">View All Notifications</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-large">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                                        <i class='bx bx-comment'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:;">
                                            <div class="msg-header">
                                                <p class="msg-header-title">Messages</p>
                                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                                            </div>
                                        </a>
                                        <div class="header-message-list">
                                            <a class="dropdown-item" href="javascript:;">
                                                <div class="d-flex align-items-center">
                                                    <div class="user-online">
                                                        <img src="{{asset('/')}}images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
                                                    ago</span></h6>
                                                        <p class="msg-info">The standard chunk of lorem</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a href="javascript:;">
                                            <div class="text-center msg-footer">View All Messages</div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-box dropdown">
                            <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('/')}}images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                                <div class="user-info ps-3">
                                    <p class="user-name mb-0">Pauline Seitz</p>
                                    <p class="designattion mb-0">Web Designer</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                                </li>
                                <li>
                                    <div class="dropdown-divider mb-0"></div>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!--end header -->

            <!--start page wrapper -->
            <div class="page-wrapper">
                <div class="page-content">

                        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                            <div class="col">
                                <div class="card radius-10 bg-gradient-deepblue">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 text-white">9526</h5>
                                        <div class="ms-auto">
                                            <i class='bx bx-cart fs-3 text-white'></i>
                                        </div>
                                    </div>
                                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                        <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex align-items-center text-white">
                                        <p class="mb-0">Total Orders</p>
                                        <p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!--end row-->


                </div>
            </div>
            <!--end page wrapper -->
            <!--start overlay-->
            <div class="overlay toggle-icon"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
            <footer class="page-footer">
                <p class="mb-0">Copyright © 2021. All right reserved.</p>
            </footer>
        </div>
        <!--end wrapper-->

@endsection
