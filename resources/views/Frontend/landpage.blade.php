@include('Frontend.layout.header')
            <!--to-bar-->
            <div class="header-main container">
	            <div class="row">
	                <h1 class="logo col-md-6 col-12">
	                    <a href="index.html"><img id="logo" src="{{ asset('storage/images/'.$institute->logo) }}" alt="Logo"></a>
	                </h1>
	                <div class="info col-md-6 col-12">
	                    <ul class="menu-top float-right d-none d-md-block">
	                        <li class="divider"><a href="index.html">হোম</a></li>
	                        <li class="divider"><a href="index.html">বোর্ড মেম্বারস</a></li>
	                        <li class="divider"><a href="index.html">শিক্ষকমন্ডলী</li>
	                        <li class="divider"><a href="faq.html">প্রশ্ন</a></li>
	                        <li><a href="contact.html">যোগাযোগ</a></li>
	                    </ul>
                        <!--menu-top-->
	                    <br />
	                    <div class="contact float-right mt-4">
	                        <p class="phone"><i class="fas fa-phone"></i>কল করুন {{ $institute->phone_no }}</p>
	                        <p class="email"><i class="fas fa-envelope"></i><a href="contact.html">{{ $institute->email }}</a></p>
	                    </div>
	                </div>
	            </div>
            </div>
        </header>

        <!-- NAV -->
        <div class="main-nav-wrapper">
            <div class="container d-flex">
	            <nav class="main-nav navbar navbar-expand-md" role="navigation">
	                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse">
	                    <span class="sr-only"></span>
	                    <span class="icon-bar"></span>
	                </button>

	                <div class="navbar-collapse collapse" id="navbar-collapse">
	                    <ul class="nav navbar-nav">
	                        <li class="nav-item"><a class="nav-link" href="index.html">হোম</a></li>
	                        <li class="nav-item dropdown">
	                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">অন্যান্য <i class="fas fa-angle-down"></i></a>
	                            <div class="dropdown-menu">
                                    @foreach($submenu as $s)
                                    <a class="dropdown-item" href="about.html">{{ $s->sub_menu_name }}</a>
                                    @endforeach

	                            </div>
	                        </li>
                            @foreach($menu as $menu)
                            <li class="nav-item"><a class="nav-link" href="index.html">{{ $menu->menu_name }}</a></li>
                            @endforeach
	                    </ul>
	                </div>
		        </nav>
	        </div>
        </div>


        <marquee style="color:black">"<span class="text-danger"> বারবাজার ডিগ্রী কলেজ </span>"
            বাংলাদেশের স্বনামধন্য একটি ডিগ্রী কলেজ। আমাদের প্রতিষ্ঠানে খুবই মনোরম পরিবেশে বিশ্বমানের
            শিক্ষকমন্ডলী দ্বারা শিক্ষার্থীদেরকে পাঠ-দ্বান করা হয়। </marquee>


        <!-- CONTENT -->
        <div class="content container">
            <div id="promo-slider" class="slider flexslider rounded">
                <ul class="slides">
                    @foreach($sliders as $slid)
                    <li>
                        <img src="{{asset('storage/images/Slider/' .$slid->image)}}"  alt="" />
                        <p class="flex-caption">
                            <span class="main rounded" >{{ $slid->title }}</span>
                            <br />
                            <span class="secondary clearfix rounded" >{{ $slid->description }}</span>
                        </p>
                    </li>
                    @endforeach
                </ul>
                <!--slides-->
            </div>

            <div class="row cols-wrapper">
                <div class="col-lg-3 col-12">
                    <section class="links rounded shadow">
                        <h1 class="section-heading text-highlight"><span class="line">সভাপতির মেসেজ</span></h1>
                        <img src="assets/images/photo.png" height="100px" width="100px" alt="photo" />
                        <div class="section-content">
                            <p>এমন প্রশ্নে সরাসরি হ্যাঁ বা না বলার সুযোগ নেই। তবে তিনি যে বর্তমানে সেরা পেসারদের একজন, সে বিষয়ে সংশয় থাকার কোনো
                                সুযোগ নেই। আর এশিয়া কাপে ভারতের বিপক্ষে প্রথম দেখায় যেভাবে রোহিত শর্মা, বিরাট কোহলিদের বোকা বানিয়েছেন;
                                তাতে আফ্রিদির শ্রেষ্ঠত্ব মানছেন অনেকেই।
                            </p>
                        </div>
                    </section>
                    <section class="events rounded shadow">
                        <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
                        <div class="section-content">
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">FEB</span>
                                    <span class="date-number">18</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">Open Day</h2>
                                    <p class="time"><i class="far fa-clock"></i>10:00am - 18:00pm</p>
                                    <p class="location"><i class="fas fa-map-marker-alt"></i>Lakshmipur Campus</p>
                                </div>
                            </div>
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">SEP</span>
                                    <span class="date-number">06</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">E-learning at SEU</h2>
                                    <p class="time"><i class="far fa-clock"></i>10:00am - 16:00pm</p>
                                    <p class="location"><i class="fas fa-map-marker-alt"></i>SEU Learning Center</p>
                                </div>
                            </div>
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">JUN</span>
                                    <span class="date-number">23</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">Career Fair</h2>
                                    <p class="time"><i class="far fa-clock"></i>09:45am - 16:00pm</p>
                                    <p class="location"><i class="fas fa-map-marker-alt"></i>SEU Library</p>
                                </div>
                            </div>
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">May</span>
                                    <span class="date-number">17</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">Science Seminar</h2>
                                    <p class="time"><i class="far fa-clock"></i>14:00pm - 18:00pm</p>
                                    <p class="location"><i class="fas fa-map-marker-alt"></i>SEU Library</p>
                                </div>
                            </div>
                            <a class="read-more" href="events.html">All events<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6 col-12">
                    <section class="course-finder rounded shadow">
                        <h1 class="section-heading text-highlight"><span class="line">আমাদের কলেজ সম্পর্কে</span></h1>
                        <div class="section-content">
                            <p>এমন প্রশ্নে সরাসরি হ্যাঁ বা না বলার সুযোগ নেই। তবে তিনি যে বর্তমানে সেরা পেসারদের একজন, সে বিষয়ে সংশয় থাকার কোনো সুযোগ নেই। আর এশিয়া কাপে ভারতের বিপক্ষে প্রথম দেখায় যেভাবে রোহিত শর্মা, বিরাট কোহলিদের বোকা বানিয়েছেন; তাতে আফ্রিদির শ্রেষ্ঠত্ব মানছেন অনেকেই।
                                ভারতের বিপক্ষে এই পেসার নিয়েছিলেন ৩৫ রানে ৪ উইকেট। এখানেই শেষ নয়, আফ্রিদি বলেছেন এটা কেবল শুরু। এএফপিকে দেওয়া সাক্ষাৎকারে এই পেসার বলেছেন, তাঁর সেরাটা আসছে। এমন বলে কি ভারতকে হুমকি দিয়ে রাখলেন আফ্রিদি!
                            </p>
                            <a class="read-more" href="#">See Details<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </section>

                    <section class="events rounded shadow">
                        <h1 class="section-heading text-highlight"><span class="line">নোটিশ</span></h1>
                        <div class="section-content">
                            <div class="event-item">
                                <div class="details">
                                    <h2 class="title"><b>উচ্চ মাধ্যমিক পরীক্ষা ২০২৩ উপলক্ষে কলেজের নতুন ক্যাম্পাসের পাঠদান বন্ধের নোটিশ</b></h2>
                                    <p class="time">এমন প্রশ্নে সরাসরি হ্যাঁ বা না বলার সুযোগ নেই। তবে তিনি যে বর্তমানে সেরা পেসারদের একজন, সে বিষয়ে সংশয় থাকার কোনো সুযোগ নেই।
                                    </p>
                                </div>
                            </div>
                            <div class="event-item">
                                <div class="details">
                                    <h2 class="title"><b>আগামীকাল শুভ জন্মাষ্টমীর উপলক্ষে কলেজ বন্ধ থাকবে</b></h2>
                                    <p class="time">এমন প্রশ্নে সরাসরি হ্যাঁ বা না বলার সুযোগ নেই। তবে তিনি যে বর্তমানে সেরা পেসারদের একজন, সে বিষয়ে সংশয় থাকার কোনো সুযোগ নেই।
                                    </p>
                                </div>
                            </div>
                            <div class="event-item">
                                <div class="details">
                                    <h2 class="title"><b>উচ্চ মাধ্যমিক পরীক্ষা ২০২৩ উপলক্ষে ব্যবসায় শিক্ষা ভবনের শ্রেণি কার্যক্রম বন্ধের নোটিশ</b></h2>
                                    <p class="time">এমন প্রশ্নে সরাসরি হ্যাঁ বা না বলার সুযোগ নেই। তবে তিনি যে বর্তমানে সেরা পেসারদের একজন, সে বিষয়ে সংশয় থাকার কোনো সুযোগ নেই।
                                    </p>
                                </div>
                            </div>
                            <div class="event-item">
                                <div class="details">
                                    <h2 class="title"><b>পুরাতন ক্যাম্পাাস ও নতুন ক্যাম্পাসের শ্রেণি কার্যক্রম শুরু করার নোটিশ</b></h2>
                                    <p class="time">এমন প্রশ্নে সরাসরি হ্যাঁ বা না বলার সুযোগ নেই। তবে তিনি যে বর্তমানে সেরা পেসারদের একজন, সে বিষয়ে সংশয় থাকার কোনো সুযোগ নেই।
                                    </p>
                                </div>
                            </div>
                            <a class="read-more" href="#">All Notices<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-12">

                    <section class="links rounded shadow">
                        <h1 class="section-heading text-highlight"><span class="line">প্রিন্সিপাল মেসেজ</span></h1>
                        <img src="assets/images/photo.png" height="100px" width="100px" alt="photo" />
                        <div class="section-content">
                            <p>এমন প্রশ্নে সরাসরি হ্যাঁ বা না বলার সুযোগ নেই। তবে তিনি যে বর্তমানে সেরা পেসারদের একজন, সে বিষয়ে সংশয় থাকার কোনো সুযোগ নেই।
                                আর এশিয়া কাপে ভারতের বিপক্ষে প্রথম দেখায় যেভাবে রোহিত শর্মা, বিরাট কোহলিদের বোকা বানিয়েছেন; তাতে আফ্রিদির শ্রেষ্ঠত্ব মানছেন অনেকেই।
                            </p>
                        </div>
                    </section>

                    <section class="links rounded shadow">
                        <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>
                        <div class="section-content">
                            <p><a href="#"><i class="fas fa-caret-right"></i>E-learning Portal</a></p>
                            <p><a href="#"><i class="fas fa-caret-right"></i>Gallery</a></p>
                            <p><a href="#"><i class="fas fa-caret-right"></i>Job Vacancies</a></p>
                            <p><a href="#"><i class="fas fa-caret-right"></i>Contact</a></p>
                        </div>
                    </section>

                    <section class="testimonials">
                        <h1 class="section-heading text-highlight"><span class="line"> Testimonials</span></h1>
                        <div class="carousel-controls">
                            <a class="prev rounded-pill" href="#testimonials-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                            <a class="next rounded-pill" href="#testimonials-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
                        </div>
                        <div class="section-content">
                            <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item item active">
                                        <blockquote class="quote">
                                            <p><i class="fas fa-quote-left"></i>I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.</p>
                                        </blockquote>
                                        <div class="source">
                                            <p class="people"><span class="name">Shahin Hossain</span></p>
                                            <img class="profile" src="assets/images/testimonials/testimonial-1.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="carousel-item item">
                                        <blockquote class="quote">
                                            <p><i class="fas fa-quote-left"></i>
                                            I'm very pleased commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.</p>
                                        </blockquote>
                                        <div class="source">
                                            <p class="people"><span class="name">Harunur Rashid Noyon</span></p>
                                            <img class="profile" src="assets/images/testimonials/testimonial-2.jpg"  alt="" />
                                        </div>
                                    </div>
                                    <div class="carousel-item item">
                                        <blockquote class="quote">
                                            <p><i class="fas fa-quote-left"></i>
                                            I'm delighted commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.</p>
                                        </blockquote>
                                        <div class="source">
                                            <p class="people"><span class="name">Iqbal Hossain</span></p>
                                            <img class="profile" src="assets/images/testimonials/testimonial-3.jpg"  alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

             <!--promo-->
             <section class="news rounded">
                <h1 class="section-heading text-highlight fw-bold"><span class="line">সামপ্রতিক সংবাদ</span></h1>
                <div class="carousel-controls">
                    <a class="prev rounded-pill" href="#news-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                    <a class="next rounded-pill" href="#news-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
                </div>
                <!--carousel-controls-->
                <div class="section-content clearfix">
                    <div id="news-carousel" class="news-carousel carousel slide">
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
	                            <div class="row">
	                                <div class="col-lg-4 col-12 news-item">
	                                    <h2 class="title"><a href="news.html">Award Giving Ceremony</a></h2>
	                                    <img class="thumb rounded-pill" src="assets/images/news/news-thumb-1.jpg"  alt="" />
	                                    <p>Suspendisse purus felis, porttitor quis sollicitudin sit amet, elementum et tortor. Praesent lacinia magna in malesuada vestibulum. Pellentesque urna libero.</p>
	                                    <a class="read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a>
	                                </div>
	                                <div class="col-lg-4 col-12 news-item">
	                                    <h2 class="title"><a href="news.html">RAG Day (Batch 201-19)</a></h2>
	                                    <p>Nam feugiat erat vel neque mollis, non vulputate erat aliquet. Maecenas ac leo porttitor, semper risus condimentum, cursus elit. Vivamus vitae libero tellus.</p>
	                                    <a class="read-more" href="news.html">Read more<i class="fas fa-chevron-right"></i></a>
	                                    <img class="thumb rounded-pill" src="assets/images/news/news-thumb-2.jpg"  alt="" />
	                                </div>
	                                <div class="col-lg-4 col-12 news-item">
	                                    <h2 class="title"><a href="news.html">Tribute to Principal M.A. Sattar</a></h2>
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum mauris eget sapien consectetur pellentesque. Proin elementum tristique euismod. </p>
	                                    <a class="read-more" href="news.html">Read more<i class="fas fa-chevron-right"></i></a>
	                                    <img class="thumb rounded-pill" src="assets/images/news/news-thumb-3.jpg"  alt="" />
	                                </div>
	                            </div>
                            </div>
                            <!--item-->
                            <div class="item carousel-item">
	                            <div class="row">
	                                <div class="col-lg-4 col-12 news-item">
	                                    <h2 class="title"><a href="news.html">Principal M. A. Sattar</a></h2>
	                                    <img class="thumb rounded-pill" src="assets/images/news/news-thumb-4.jpg"  alt="" />
	                                    <p>Suspendisse purus felis, porttitor quis sollicitudin sit amet, elementum et tortor. Praesent lacinia magna in malesuada vestibulum. Pellentesque urna libero.</p>
	                                    <a class="read-more" href="news.html">Read more<i class="fas fa-chevron-right"></i></a>
	                                </div>
	                                <div class="col-lg-4 col-12 news-item">
	                                    <h2 class="title"><a href="news.html">Conference</a></h2>
	                                    <p>Nam feugiat erat vel neque mollis, non vulputate erat aliquet. Maecenas ac leo porttitor, semper risus condimentum, cursus elit. Vivamus vitae libero tellus.</p>
	                                    <a class="read-more" href="news.html">Read more<i class="fas fa-chevron-right"></i></a>
	                                    <img class="thumb rounded-pill" src="assets/images/news/news-thumb-5.jpg"  alt="" />
	                                </div>
	                                <div class="col-lg-4 col-12 news-item">
	                                    <h2 class="title"><a href="news.html">Student Practical Training</a></h2>
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam bibendum mauris eget sapien consectetur pellentesque. Proin elementum tristique euismod. </p>
	                                    <a class="read-more" href="news.html">Read more<i class="fas fa-chevron-right"></i></a>
	                                    <img class="thumb rounded-pill" src="assets/images/news/news-thumb-6.jpg"  alt="" />
	                                </div>
                                    <!--news-item-->
	                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
@include('Frontend.layout.footer')