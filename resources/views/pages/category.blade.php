@extends('layout')
@section('content')



  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('css/style-liberty.css')}}">



<body>
<script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
    if(typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
    }
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
    // format, zoneKey, segment:value, options
    _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
    if(typeof _bsa !== 'undefined' && _bsa) {
        // format, zoneKey, segment:value, options
        _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
    }
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-98H8KRKT85');
</script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>


    
<div class="blog-posts w3l-homeblock1 py-5">
    <div class="container py-lg-4 py-md-3">
        <!-- block -->
        <div class="most-recent">
            <div class="row">
                <div class="col-lg-8 item">

                    <h3 class="category-title mb-3"> {{$title_category->title}}</h3>
        <p class="mb-sm-5 mb-4 max-width">{{$title_category->short_desc}}</p>
        
            @foreach($category_post as $key => $post)
                    <div class="card mb-5">
                        <div class="card-header p-0 position-relative">
                            <a href="{{route('bai-viet.show',[$post->id])}}">
                                <img class="card-img-bottom d-block radius-image" src="{{asset('public/uploads/'.$post->image)}}"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe recipe">Reciepe</a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="{{route('bai-viet.show',[$post->id])}}" class="blog-desc">{{$post->title}}
                            </a>
                            <p>{!!$post->short_desc!!}</p>
                            <div class="p-footer mt-3">
                                <div class="p-meta-info">
                                    <a href="#img" class="post-img-anchor">
                                        <img src="{{asset('images/hoc.jpg')}}" alt="" class="post-img radius-img img-fluid">
                                    </a>
                                    <a href="#url">Hoang Hoc</a>
                                    <span class="post-date ml-3"><span class="fa fa-clock-o" aria-hidden="true"></span>
                                        {{$post->updated_at}}</span>
                                </div>
                                <a href="{{route('bai-viet.show',[$post->id])}}" class="read">Xem thêm <span class="fas fa-arrow-right"
                                        aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                    <!-- pagination -->
                    <div class="col-12 pagination-wrapper mt-5 pt-lg-3 text-center">
                        <ul class="page-pagination">
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#url">2</a></li>
                            <li><a class="page-numbers" href="#url">3</a></li>
                            <li><a class="next" href="#url">Next <span class="fa fa-angle-right"></span></a></li>
                        </ul>
                    </div>
                    <!-- //pagination -->
                </div>
                <div class="col-lg-4 item mt-lg-0 mt-5">
                    <div class="sticky">
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="author">
                                <div class="sidebar-title mb-4">
                                    <h3 class="title-left">About Author</h3>
                                </div>
                                <div class="author-detalis">
                                    <a href="#author" class="author-image"><img src="assets/images/a5.jpg"
                                            alt="author image" class="img-fluid"></a>
                                    <div class="author-info">
                                        <a href="#author-name" class="author-name">I'm Justin</a>
                                        <a href="#follow" class="btn btn-outline-primary">Follow </a>
                                    </div>
                                </div>
                                <p class="mt-2">I am a Fashion designer, Makeup artist, and Blog
                                    writer. And I always love to write Articles / Blog posts.</p>
                                <div class="social text-center mt-3">
                                    <ul class="d-flex">
                                        <li class="mr-2">
                                            <a href="#" class="facebook"><span class="fab fa-facebook-f"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="#" class="twitter"><span class="fab fa-twitter"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li class="mr-2">
                                            <a href="#" class="rss"><span class="fas fa-rss"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                        <li class="">
                                            <a href="#" class="linkedin"><span class="fab fa-linkedin-in"
                                                    aria-hidden="true"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title mb-4">
                                <h3 class="title-left">Latest recipes</h3>
                            </div>

                            <article class="post-recipe">
                                <figure class="post-thumb">
                                    <img src="assets/images/cake1.jpg" class="img-fluid radius-image" alt="">
                                    <div class="text-small"><a href="blog-single.html">How to make capuccino</a>
                                    </div>
                                </figure>
                                <figure class="post-thumb">
                                    <img src="assets/images/cake2.jpg" class="img-fluid radius-image" alt="">
                                    <div class="text-small"><a href="blog-single.html">Starbucks blond coffee
                                        </a>
                                    </div>
                                </figure>
                                <figure class="post-thumb">
                                    <img src="assets/images/cake3.jpg" class="img-fluid radius-image" alt="">
                                    <div class="text-small"><a href="blog-single.html">
                                        The best Cookie recipes to bake</a>
                                    </div>
                                </figure>
                                <figure class="post-thumb">
                                    <img src="assets/images/cake4.jpg" class="img-fluid radius-image" alt="">
                                    <div class="text-small"><a href="blog-single.html">
                                        Only 12 best curry recipes you'll need</a>
                                    </div>
                                </figure>
                            </article>
                        </div>

                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title mb-4">
                                <h3 class="title-left">Trending posts</h3>
                            </div>

                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/recipe.jpg" class="img-fluid" alt="">
                                </figure>
                                <div class="text"><a href="blog-single.html">12 Curry Recipes You’ll Ever Need </a>
                                    <div class="post-info">Oct 4, 2020</div>
                                </div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/drinks.jpg" class="img-fluid" alt="">
                                </figure>
                                <div class="text"><a href="blog-single.html">Sweet Strawberry Dink for Summer
                                    </a>
                                    <div class="post-info">Oct 5, 2020</div>
                                </div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><img src="assets/images/video.jpg" class="img-fluid" alt="">
                                </figure>
                                <div class="text"><a href="blog-single.html"> How to make easiest pancakes ever</a>
                                    <div class="post-info">Oct 6, 2020</div>
                                </div>
                            </article>
                        </div>
                        
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h3 class="title-left mb-4">Categories</h3>
                            </div>
                            <ul class="blog-cat">
                                <li><a href="#url">Desserts </a></li>
                                <li><a href="#url">Cakes and Biscuits</a></li>
                                <li><a href="#url">Food recipes</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-widget">
                            <h3 class="title-left mb-4">Advertisement</h3>
                            <a href="#ad">
                                <img src="assets/images/1.jpg" alt=" " class="img-fluid radius-image">
                              </a>
                        </div>
                        <div class="sidebar-widget subscribe">
                            <div class="sidebar-title">
                                <h3 class="title-left mb-4">Subscribe to the best creative feed.</h3>
                                <form class="form-inline subscribe-form" action="#" method="GET">
                                    <input class="form-control" type="email" placeholder="Enter your email" aria-label="email" required="">
                                    <button class="btn" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //block-->
        </div>
    </div>
</div>


  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
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
  <!-- /move top -->

  <script src="{{asset('js/theme-change.js')}}"></script><!-- theme switch js (light and dark)-->

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script><!-- default jQuery -->

  <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

  <!-- libhtbox -->
  <script src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>

  <!-- owlcarousel -->
  <script src="{{asset('js/owl.carousel.js')}}"></script>
  <!-- script for banner typing text -->
  <script>
    function autoType(elementClass, typingSpeed) {
      var thhis = $(elementClass);
      thhis.css({
        "position": "relative",
        "display": "inline-block"
      });
      thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
      thhis = thhis.find(".text-js");
      var text = thhis.text().trim().split('');
      var amntOfChars = text.length;
      var newString = "";
      thhis.text("|");
      setTimeout(function () {
        thhis.css("opacity", 1);
        thhis.prev().removeAttr("style");
        thhis.text("");
        for (var i = 0; i < amntOfChars; i++) {
          (function (i, char) {
            setTimeout(function () {
              newString += char;
              thhis.text(newString);
            }, i * typingSpeed);
          })(i + 1, text[i]);
        }
      }, 1500);
    }

    $(document).ready(function () {
      // Now to start autoTyping just call the autoType function with the 
      // class of outer div
      // The second paramter is the speed between each letter is typed.   
      autoType(".type-js", 200);
    });
  </script>
  <!-- //script for banner typing text -->

  <!-- script for carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        nav: false,
        margin: 30,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          767: {
            items: 2,
            nav: false
          },
          992: {
            items: 4,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for carousel slider -->

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

  <!-- bootstrap js -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

  
</body>


  @endsection