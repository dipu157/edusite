@include('Frontend.layout.header')


<!-- banner area start -->

<section id="banner">
    <div class="banner-slider">
        @foreach($sliders as $slid)
        <div class="banner-item">
            <img src="{{asset('storage/images/Slider/' .$slid->image)}}" alt="Rectangle"  class="w-100 img-fluid">
            <div class="banner-text">
                <h2>{{ $slid->title }}</h2>
                <h1>{{ $slid->description }}</h1>
            </div>
        </div>
        @endforeach
    </div>
    <div class="admission-date">
        <div class="container text-white"><span>important Note:</span>
            <div class="admission-date-inner">
                <h4><marquee behavior="scroll" direction="left"> {{ $inotice->title }}</marquee></h4>
            </div>
        </div>
    </div>
</section>

<!-- banner area end -->

<!-- History area start -->

<section id="history">
    <div class="container card shadow">
        <div class="title text-center card-header">
            <h2 class="card-title">Our History</h2>
            <img src="{{asset("/frontend/assets/images/bar.svg")}}" alt="bar">
        </div>
        <div class="history-wrapper card-body">
            <p class="card-text">
                {{ $institute->history }}
            </p>
        </div>
    </div>
</section>

<!-- History area end -->

<!-- notice-board area start -->

<section id="notice-board">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="row">
                    
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="notice">
                            <img  class="union" src="{{asset("/frontend/assets/images/Union.svg")}}" alt="Union">
                            <div class="noticeBoard">
                                <div class="noticeBoardTitle text-center">
                                    <h3>NOTICE BOARD</h3>
                                </div>
                                <div class="noticeBoard-inner">
                                    <img class="noticeBoard w-100 " src="{{asset("/frontend/assets/images/notice.svg")}}" alt="board">
                                    <div class="noticeboard-innerText">
                                        <h5 class="noticeBoard-lsit-title"><img src="{{asset("/frontend/assets/images/redpin.svg")}}" alt="redpin"> Notice To All the Classes: Puja vacation starts from tomorrow, 19.10.2023 Till 29.10.2023. School reopens on Monday, 30.10.2023 with day 1 routine.</h5>
                                        <ul class="noticeList">
                                            @foreach($notice as $not)
                                            <li class="noticeListItem"><a href="#"><img src="{{asset("/frontend/assets/images/pin.svg")}}" alt="pin"> {{ $not->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="flag">
                            <img src="{{asset("/frontend/assets/images/flag.svg")}}" alt="flag">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="teacher">
                    <div class="message">
                        <h3>Message</h3>
                    </div>

                    @foreach ($message as $msg)
                        <div class="row">
                                <div class="col-lg-12 col-12 col-sm-6">
                                    <div class="teacher-card text-center ">
                                        <h3>{{ $msg->position }}</h3>
                                        <img class="avater" src="{{asset('storage/message/' .$msg->photo)}}" alt="avater">
                                        <h4>{{ $msg->name }}</h4>
                                        <p>{{ $msg->message }}</p>
                                        <button>Read more <i class="fa-solid fa-angles-right"></i></button>
                                    </div>
                                </div>
                        </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- notice-board area end -->

<!-- school-events area start -->

<section id="SchoolEvents">
    <div class="container">
        <div class="title text-center ">
            <h2>COLLEGE EVENTS</h2>
            <img src="{{asset("/frontend/assets/images/bar.svg")}}" alt="bar">
        </div>
        <div class="events-area">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="upComingEvents">
                        <img class="w-100 img-fluid " src="{{asset("/frontend/assets/images/eventsBG.svg")}}" alt="eventsBG">
                        <h4 class="upComingEvenText">No Upcoming Event</h4>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="eventsItem-wrapper">
                       <div class="row">
                        @foreach ($events as $new)
                            <div class="col-lg-6 col-12 col-sm-6">
                                <div class="events-item text-center ">
                                    <div class="overlay">
                                        <img class="w-100 img-fluid" src="{{ asset('storage/images/events/' . $new->image) }}" alt="event1">
                                        <div class="event-itemText">
                                            <h4>{{ $new->title }}</h4>
                                            <h5><i class="fa-solid fa-calendar-days"></i> {{ $new->event_date }}</h5>
                                        </div>
                                    </div>
                                    <button class="mt-4">View Details</button>
                                </div>
                            </div>
                        @endforeach
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- school-events area end -->

<!-- counter area start -->

<section id="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-item text-center ">
                    <img src="{{asset("/frontend/assets/images/counterAvater1.png")}}" alt="counterAvater">
                    <h2 class="counter">112</h2>
                    <h5>CERTIFIED TEACHERS</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-item text-center ">
                    <img src="{{asset("/frontend/assets/images/counterAvater2.png")}}" alt="counterAvater">
                    <h2 class="counter">282673</h2>
                    <h5>STUDENTS ENROLLED</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-item text-center ">
                    <img src="{{asset("/frontend/assets/images/counterAvater3.png")}}" alt="counterAvater">
                    <h2 class="counter">599666</h2>
                    <h5>PASSING TO UNIVERSITIES</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-item text-center ">
                    <img src="{{asset("/frontend/assets/images/counterAvater4.png")}}" alt="counterAvater">
                    <h2 class="counter">1200</h2>
                    <h5>SATISFIED PARENTS</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- counter area end -->

<!-- administration area start -->

<section id="administration">
    <div class="container">
        <div class="title text-center ">
            <h2>OUR TEACHERS</h2>
            <img src="{{asset("/frontend/assets/images/bar.svg")}}" alt="bar">
        </div>
        <div class="administration-wrapper">
            @foreach ($teachers as $teach)
                <div class="admins-item">
                    <a href="#">
                        <div class="admins-img">
                            <img src="{{asset('storage/images/teacher/' .$teach->photo)}}" alt="teacher">
                        </div>
                        <h3>{{ $teach->position }}</h3>
                        <h4>{{ $teach->name }}</h4>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- administration area end -->


@include('Frontend.layout.footer')
