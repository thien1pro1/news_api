

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Newsnew</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Spartan:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('client/css/style-starter.css')}}">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0 pt-lg-0">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        Passion<span class="logo-sub">Kraft</a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
						  <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact US</a>
                        </li>
                    </ul>
                    <!--/search-right-->
                    <div class="search-right">
                        <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                    </div>
                    <!--//search-right-->
                    <div class="top-quote mr-lg-3 mt-lg-0 mr-lg-4">
                        <a href="contact.html" class="btn btn-style btn-white btn-primary">Get In Touch</a>
                    </div>
                    @if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
    @endauth
</div>
@endif
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--/header-->

    <!--/header-->
    <div class="section-mid-gap"></div>
    <!--/Banner-Start-->
    <section class="bannerw3l-hnyv">
        <div class="slider">
            <!-- slides -->
            <div class="slider__slides">
                <div class="slide s--active">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <h3 class="slide__heading">Women's Fashion
                                50% Off</h3>
                            <p class="slide__text">Enjoy this Summer Trend</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <h3 class="slide__heading">Men's Fashion
                                60% Off</h3>
                            <p class="slide__text">Mid season 50% Offer</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <h3 class="slide__heading">Kid’s Fashion 70% Off</h3>
                            <p class="slide__text">Enjoy this Summer Trend</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <h3 class="slide__heading">Accessories 40% Off</h3>
                            <p class="slide__text">Mid season 50% Offer</p>
                        </div>
                    </div>
                </div>
                <div class="slide s--prev">
                    <div class="slide__inner">
                        <div class="slide__content">
                            <h3 class="slide__heading">Cosmetics 50% Off</h3>
                            <p class="slide__text">Enjoy this Summer Trend</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slides end -->
            <div class="slider__control">
                <div class="slider__control-line"></div>
                <div class="slider__control-line"></div>
            </div>
            <div class="slider__control slider__control--right m--right">
                <div class="slider__control-line"></div>
                <div class="slider__control-line"></div>
            </div>
        </div>
        <div class="bannerw3l-layer"></div>
    </section>
    <!--//Banner-End-->
    <!--/social-media-->
    <div class="social-w3l-media-sec">
        <div class="w3l-social-imf-left">

        </div>
        <div class="social-column-grids">
            <div class="w3l-social-gd">
                <a href=" #" target="_blank" class="facebook">
                    <span class="fab fa-facebook-f mr-2"></span>
                    <span class="social-text">Facebook</span>
                </a>
            </div>
            <div class="w3l-social-gd">
                <a href="#" target="_blank" class="twitter">
                    <span class="fab fa-twitter mr-2"></span>
                    <span class="social-text">Twitter</span>
                </a>
            </div>
            <div class="w3l-social-gd">
                <a href=" #" class="dribble">
                    <span class="fab fa-dribbble mr-2"></span>
                    <span class="social-text">Dribbble</span>
                </a>
            </div>
            <div class="w3l-social-gd">
                <a href=" #" target="_blank" class="instagram">
                    <span class="fab fa-instagram mr-2"></span>
                    <span class="social-text">Instagram</span>
                </a>
            </div>
          
        </div>
        <div class="w3l-social-button-right">
            <a href=" #" class="btn-explore">
                Explore Now
            </a>
        </div>
    </div>
    <!--//social-media-->
    <!--/about-home-->
    <section class="w3l-servicesblock py-5" id="about">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-4 mb-lg-0 mb-5 pr-lg-5">
                    <img src="{{asset('client/images/ab.jpg')}}" alt="" class="img-fluid radius-image">
                </div>
                <div class="col-lg-8 about-right-faq align-self">
                    <h6 class="title-subw3hny">About Us</h6>
                    <h3 class="title-w3l mb-4">We have 10+ years of <span class="thin">experience.</span></h3>
                    <div class="two-grids-hmew3">
                        <p class="mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula.
                            Semper at tempufddfel. Lorem ipsum dolor.
                        </p>
                        <p class="mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula.
                            Semper at tempufddfel. Lorem ipsum dolor.
                        </p>
                    </div>

                    <div class="three-grids-hmew3 mt-5 pt-lg-3">
                        <div class="three-grid-1 text-center">
                            <img src="{{asset('client/images/s1.jpg')}}" alt="" class="img-fluid radius-image">
                            <h4>Watches</h4>
                            <p class="mt-2">Lorem ipsum dolamet consetetur elitrd diam eirmod tempor.
                            </p>
                        </div>
                        <div class="three-grid-1 text-center">
                            <img src="{{asset('client/images/s2.jpg')}}" alt="" class="img-fluid radius-image">
                            <h4>Shoes</h4>
                            <p class="mt-2">Lorem ipsum dolamet consetetur elitrd diam eirmod tempor.
                            </p>
                        </div>
                        <div class="three-grid-1 text-center">
                            <img src="{{asset('client/images/s3.jpg')}}" alt="" class="img-fluid radius-image">
                            <h4>Cosmetics</h4>
                            <p class="mt-2">Lorem ipsum dolamet consetetur elitrd diam eirmod tempor.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--//about-home-->
    <!--/w3l-passion-mid-sec-->
    <section class="w3l-passion-mid-sec py-5">
        <div class="container py-md-5 py-3">
            <div class="container">
                <div class="row w3l-passion-mid-grids">
                    <div class="col-lg-5 w3hny-passion-item">
                        <div class="passion-grid-item-pic">
                            <img src="{{asset('client/images/about2.jpg')}}" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                    <div class="col-lg-7 passion-grid-item-info pl-lg-5 mt-lg-0 mt-5">
                        <h6 class="title-subw3hny">Summer Collection</h6>
                        <h3 class="title-w3l mb-4">Accessories </br>Collections 2021</h3>
                        <p class="mt-3 pr-lg-5">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
                            ligula. Semper at tempufddfel.Lorem ipsum dolor sit, amet consectetur elit. Earum mollitia
                            cum ex ipsam autem!earum sequi amet.Pellen tesque libero ut justo ipsam.</p>
                        <a href="#" class="btn btn-primary btn-style mt-lg-5 mt-4">Shop now</a>
                    </div>

                    <div class="col-lg-7 passion-grid-item-info pr-lg-5 mt-5 pt-lg-5">
                        <h6 class="title-subw3hny">Summer Collection</h6>
                        <h3 class="title-w3l mb-4">Women </br>Cosmetics 2021</h3>
                        <p class="mt-3 pr-lg-5">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
                            ligula. Semper at tempufddfel.Lorem ipsum dolor sit, amet consectetur elit. Earum mollitia
                            cum ex ipsam autem!earum sequi amet.Pellen tesque libero ut justo ipsam.</p>
                        <a href="#" class="btn btn-primary btn-style mt-lg-5 mt-4">Shop now</a>
                    </div>
                    <div class="col-lg-5 w3hny-passion-item mt-5 pt-lg-5">
                        <div class="passion-grid-item-pic">
                            <img src="{{asset('client/images/about1.jpg')}}" alt="" class="img-fluid radius-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--//w3l-passion-mid-sec-->

    <section class="w3l-stats-sec py-5">
        <div class="container py-md-3">
            <div class="row w3l-stats-section stats-con">
                <div class="col-lg-3 col-6 stats_info counter_grid">
                  <p class="counter">1200 </p>
                  <h3>Branches</h3>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid mt-md-0 mt-0">
                  <p class="counter">1500</p>
                  <h3>Events per month</h3>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid2 mt-md-0 mt-4">
                  <p class="counter">1545 </p>
                  <h3>Active members</h3>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid2 mt-md-0 mt-4">
                  <p class="counter">1645 </p>
                  <h3>Happy Clients</h3>
                </div>
              </div>
        </div>
    </section>
    <!--/w3l-courses-->
   
    <!--/testimonials-->
    <section class="w3l-clients-1" id="testimonials">
        <!--/cusrtomer-layout-->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <!--/testimonial-grids-->
                <div class="testimonial-row">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <div class="test-img">
                                        <img src="{{asset('client/images/team1.jpg')}}" class="img-fluid" alt="client-img">
                                    </div>
                                    <div class="testi-des">
                                        <i class="fas fa-quote-left"></i>
                                        <div class="peopl align-self">
                                            <h3>Dennis wilson</h3>
                                        </div>
                                    </div>
                                    <blockquote>
                                        Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
                                        laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
                                        facere aperiam sequi optio lacinia id ipsum non velit, culpa.
                                        voluptate rem ullam dolore nisi est quasi, doloribus tempora.
                                    </blockquote>
                                    <ul class="social-media-test m-0 mt-4 p-0">
                                        <li><a href="#facebook" class="facebook"><span
                                                    class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                                        </li>
                                        <li><a href="#instagram" class="instagram"><span
                                                    class="fab fa-instagram"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                       
                </div>
                <!--//testimonial-grids-->
            </div>
        </div>
        <!--//cusrtomer-layout-->
    </section>
    <!-- //testimonials -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4 py-sm-3">
                <div class="row footer-top-29">
                    <div class="col-lg-4 footer-list-29 footer-1 pr-lg-5">
                        <h2><a class="navbar-brand" href="index.html">
                                Passion<span class="logo-sub">Kraft</span></a></h2>
                        <p class="pr-lg-5 mr-xl-4 mb-4">Lorem ipsum dolor sit, amet consectetur elit. Earum mollitia cum
                            ex
                            ipsam autem!earum sequi amet.
                        </p>
                        <a href="contact.html" class="btn btn-style btn-primary mt-2">Contact Us</a>
                    </div>
                    <div class="col-lg-4 footer-list-29 footer-3 mt-lg-0 mt-5 pr-lg-5">
                        <h6 class="footer-title-29">Quick <span class="thinw3">Links</span></h6>
                        <div class="footer-listw3-grids">
                            <ul class="footer-listw3">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">Blogs</a></li>
                                <li><a href="contact.html">Contact</a></li>

                            </ul>
                            <ul class="footer-listw3">
                                <li><a href="#privacy">Privacy Policy</a></li>
                                <li><a href="#term">Terms of use</a></li>
                                <li><a href="#sales">Sales and Refunds</a></li>
                                <li><a href="#faq">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-list-29 footer-4 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">Keep <span class="thinw3">Connected</span></h6>
                        <p>Get Updates By Subscribe Our Weekly Newsletter</p>

                        <form action="#" class="subscribe" method="post">
                            <input type="email" name="email" placeholder="Your Email Address" required="">
                            <button><span class="fas fa-paper-plane"></span></button>
                        </form>
                        <div class="main-social-footer-29 mt-4">
                            <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
                            <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                            <a href="#pinterest"><span class="fab fa-pinterest-p"></span></a>
                            <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                            <a href="#google" class="google"><span class="fab fa-google-plus-g"></span></a>
                            <a href="#linkd" class="linkd"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="bottom-copies text-center">
            <div class="container">
                <p class="copy-footer-29">© 2021 PassionKraft. All rights reserved | Designed by <a
                        href="https://w3layouts.com">W3layouts</a></p>
            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->
    </section>

    <!-- Template JavaScript -->
    <script src="{{asset('client/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('client/js/theme-change.js"')}}></script>
    <script id="rendered-js">
        (function () {
            var $slides = document.querySelectorAll('.slide');
            var $controls = document.querySelectorAll('.slider__control');
            var numOfSlides = $slides.length;
            var slidingAT = 1300; // sync this with scss variable
            var slidingBlocked = false;

            [].slice.call($slides).forEach(function ($el, index) {
                var i = index + 1;
                $el.classList.add('slide-' + i);
                $el.dataset.slide = i;
            });

            [].slice.call($controls).forEach(function ($el) {
                $el.addEventListener('click', controlClickHandler);
            });

            function controlClickHandler() {
                if (slidingBlocked) return;
                slidingBlocked = true;

                var $control = this;
                var isRight = $control.classList.contains('m--right');
                var $curActive = document.querySelector('.slide.s--active');
                var index = +$curActive.dataset.slide;
                isRight ? index++ : index--;
                if (index < 1) index = numOfSlides;
                if (index > numOfSlides) index = 1;
                var $newActive = document.querySelector('.slide-' + index);

                $control.classList.add('a--rotation');
                $curActive.classList.remove('s--active', 's--active-prev');
                document.querySelector('.slide.s--prev').classList.remove('s--prev');

                $newActive.classList.add('s--active');
                if (!isRight) $newActive.classList.add('s--active-prev');


                var prevIndex = index - 1;
                if (prevIndex < 1) prevIndex = numOfSlides;

                document.querySelector('.slide-' + prevIndex).classList.add('s--prev');

                setTimeout(function () {
                    $control.classList.remove('a--rotation');
                    slidingBlocked = false;
                }, slidingAT * 0.75);
            };
        })();
        //# sourceURL=pen.js
    </script>
    <!--light-box-files -->
    <script src="{{asset('client/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('client/js/jquery.chocolat.js')}}"></script>
    <script type="text/javascript ">
        $(function () {
            $('.w3_agile_portfolio_grid a').Chocolat();
        });
    </script>
    <!-- /js for portfolio lightbox -->
    <!-- stats number counter-->
    <script src="{{asset('client/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('client/js/jquery.countup.js')}}"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats number counter -->
    <!-- script for testimonials -->
    <script>
        $(document).ready(function () {
            $('.owl-testimonial').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                dots: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    480: {
                        items: 1,
                        nav: true
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script for testimonials -->

    <!-- script for blog slider -->
    <script>
        $(document).ready(function () {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 2,
                        nav: false
                    },
                    992: {
                        items: 3,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for blog slider -->

    <script src="{{asset('client/js/owl.carousel.js')}}"></script>

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <script src="{{asset('client/js/bootstrap.min.js')}}"></script>

</body>

</html>
