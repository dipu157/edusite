<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoroBazar Degree College</title>
    <link rel="stylesheet" href="{{asset("/frontend/assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("/frontend/assets/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("/frontend/assets/css/slick.css")}}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("/frontend/assets/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("/frontend/assets/css/media.css")}}">

</head>

<body>


    <!-- navbar area start -->

    <header id="header" class=" d-none d-lg-block">
            <div class="row head-row">
                <div class="col-lg-3">
                    <div class="header-logo">
                       <a href="index.html">
                        <img height="50px" width="300px" src="{{asset('storage/images/'.$institute->logo)}}" alt="LOGO">
                       </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header-right">
                        <div class="header-contact d-flex justify-content-between ">
                            <ul class="headCont-wrapper">
                                <li class="head-cont-list">
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="#">Call: {{ $institute->phone }}</a>
                                </li>
                                <li class="head-cont-list">
                                    <i class="fa-solid fa-envelope"></i>
                                    <a href="#">Email: {{ $institute->email }}</a>
                                </li>
                            </ul>
                            {{-- <button class="translate">TRANSLATE <i class="fa-solid fa-caret-down"></i></button> --}}
                        </div>
                        <div class="school-navbar d-flex align-items-baseline ">
                            <ul class="navbar-wrapper d-flex ">
                                @foreach($menus as $menu)
                                <li class="nav-item">
                                    <a href="{{ route('menu.show', ['id' => $menu->id]) }}">{{$menu->name}} <span>/</span></a>
                                </li>
                                @endforeach
                                <li class="nav-item">
                                    <a href="#">Gallery </a>
                                    <div class="gallery-dropdown">
                                        <ul>
                                            <li><a href="#">Demo 1</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav-links-wrapper d-flex ">
                                {{-- <li class="nav-links"><i class="fa-solid fa-magnifying-glass"></i></li> --}}
                                {{-- <li class="nav-links"><i class="fa-brands fa-facebook-f"></i></li>
                                <li class="nav-links"><i class="fa-brands fa-twitter"></i></li>
                                <li class="nav-links"><i class="fa-brands fa-linkedin-in"></i></li> --}}
                                {{-- <li class="nav-links"><i class="fa-brands fa-instagram"></i></li> --}}
                            </ul>
                            <button class="admission">ADMISSION</button>
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <div class="responsiveNavbar d-block d-lg-none ">
        <div class="res-navbarInner d-flex align-items-center justify-content-between ">
            <button class="showSidebar" ><i class="fa-solid fa-bars"></i></button>
        <div class="res-logo">
            <a href="index.html">
                <img height="20px" width="100px" src="{{asset("/frontend/assets/images/logo1.jpg")}}" alt="LOGO">
            </a>
        </div>
        <button><i class="fa-solid fa-magnifying-glass resSearchbarShow"></i>
            <div class="res-searchbar">
               <div class="resSearchbar_inner">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-xmark resSearch-cross"></i>
               </div>
            </div>
        </button>
        </div>
        <div class="sidebar">
            <i class="fa-solid fa-xmark sidebar-cross"></i>
            <ul class="res-navbar">
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">ACADEMICS</a></li>
                <li><a href="#">ACTIVITIES</a></li>
                <li><a id="res-dropShow" href="#">GALLERY</a>
                    <div class="resGallery-dropdown">
                        <ul>
                            <li><a href="#">Demo 1</a></li>
                            <li><a href="#">Demo 2</a></li>
                            <li><a href="#">Demo 3</a></li>
                            <li><a href="#">Demo 4</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">CONTACT</a></li>
            </ul>
            <ul class="res-social">
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- navbar area end -->
