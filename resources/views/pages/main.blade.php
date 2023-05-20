
@extends('layout')
@section('content')
<section class="w3l-homeblock1 py-sm-5 py-4">
	
    <div class="container py-md-4">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-3 col-6 grids-feature">
                <a href="{{url('/api/v1/danh-muc/13?slug=fashion')}}">
                    <div class="area-box">
                        <span class="fa fa-shopping-bag"></span>
                        <h4 class="title-head">FASHION</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature">
                <a href="{{url('/api/v1/danh-muc/21?slug=cong-nghe')}}">


                    <div class="area-box">
                        <span class="fa fa-laptop"></span>
                        <h4 class="title-head">CÔNG NGHỆ</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                <a href="{{url('/api/v1/danh-muc/14?slug=giai-tri')}}">
                    <div class="area-box">
                        <span class="fa fa-film"></span>
                        <h4 class="title-head">GIẢI TRÍ</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
                <a href="{{url('/api/v1/danh-muc/19?slug=the-thao')}}">
                    <div class="area-box">
                        <span class="fa fa-futbol-o"></span>
                        <h4 class="title-head">THỂ THAO</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
  
</section>

 <!-- main-slider -->
    <div class="testimonials pt-2 pb-5">
        <div class="container pb-lg-5">
            <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
                
              @foreach($all_post2 as $key => $post)
                <div class="item">

                    <div class="row slider-info">
                    	
                        <div class="col-lg-8 message-info align-self">

                        	

                            <span class="label-blue mb-sm-4 mb-3">{{$post->category->title}}</span>

                            <h3 class="title-big mb-4">
                            	<a href="{{route('bai-viet.show',[$post->id])}}" class="blog-desc">{{$post->title}}
                                </a>
                            	
                            </h3>

                           
                      
                            <p class="message">{!!$post->short_desc!!}</p>
                        </div>
                        
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img width="740px" height="920" src="{{asset('public/uploads/'.$post->image)}}" class="img-fluid radius-image-full" alt="client image">
                        </div>
                        
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /main-slider -->


    <div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="row">
            <div class="col-lg-8">
                <h3 class="section-title-left mb-4"> Tin nóng trong ngày </h3>
                <div class="row">
                	@foreach($views_post as $key => $views)
                    <div class="col-lg-6 col-md-6 mt-md-0 mt-sm-5 mt-4 ">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="{{route('bai-viet.show',[$views->id])}}">
                                    <img width="290px" height="250" class="card-img-bottom d-block radius-image-full"
                                        src="{{asset('public/uploads/'.$views->image)}}" alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <span class="label-blue">{{$views->category->title}}</span>
                                <a href="{{route('bai-viet.show',[$views->id])}}" class="blog-desc">{{$views->title}}
                                </a>
                                <p>{{$views->short_desc}}</p>
                                <div class="author align-items-center mt-3 mb-1">
                                    <img src="{{asset('images/a2.jpg')}}" alt="" class="img-fluid rounded-circle" />
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="author.html">Hoàng Học</a> </a>
                                        </li>
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"> {{$views->updated_at}} </span>


                                        </li>
                                        <a href="{{route('bai-viet.show',[$views->id])}}">Xem thêm...</a>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-4 left-right bg-clr-white p-3">
                    <h3 class="section-title-left align-self pl-2 mb-sm-0 mb-3">Nhận thông báo tin mới nhất</h3>
                    <a class="btn btn-style btn-primary" href="#url">Sign In</a>
                </div>
            </div>
            <div class="col-lg-4 trending mt-lg-0 mt-5">
                <div class="topics">
                    <h3 class="section-title-left mb-4"> Chủ đề nổi bật được</h3>

                    

                     @foreach($show_cate as $key => $showcate)
                    <a href="{{route('danh-muc.show',[$showcate->id,'slug'=>Str::slug($showcate->title)])}}" class="topics-list">
                        <div class="list1">
                            <span class="fa fa-newspaper"></span>
                            <h4>{{$showcate->title}}</h4>
                        </div>
                    </a>
                    @endforeach
                    
                </div>
                <div class="sponsers mt-5">
                    <h3 class="section-title-left mb-4">ĐỪNG BỎ LỠ </h3>
                    @foreach($new2_post as $key => $new2)
                    <a href="{{route('bai-viet.show',[$new2->id])}}"><img width="365px" height="465px" src="{{asset('public/uploads/'.$new2->image)}}" alt="" class="img-fluid radius-image-full" /></a>
                    <a href="{{route('bai-viet.show',[$new2->id])}}" class="text-center d-block text-uppercase">{{$new2->title}}</a>

                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4">
        <h3 class="section-title-left mb-4"> Tin tức tổng hợp ngẫu nhiên </h3>
        <div class="row top-pics">
            @foreach($news_post as $key => $newss)
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="top-pic1">
                    <img width="290px" height="250" class="card-img-bottom d-block radius-image-full"
                                        src="{{asset('public/uploads/'.$newss->image)}}" alt="Card image cap">
                    

                    <div class="card-body blog-details">
                        <a href="{{route('bai-viet.show',[$newss->id])}}" class="blog-desc">{{$newss->title}}
                        </a>
                        <div class="author align-items-center">
                            <img src="{{asset('images/hoc.jpg')}}" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Hoang Hoc</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> <span class="fa fa-clock-o"></span> {{$newss->updated_at}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
         <!--    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="top-pic2">
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc">The 5 Nonnegotiables of a Healthy Quarantine food that a Doctor Approved
                        </a>
                        <div class="author align-items-center">
                            <img src="{{asset('public/frontend/images/a2.jpg')}}" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Charlotte mia</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                <div class="top-pic3">
                    <div class="card-body blog-details">
                        <a href="#blog-single.html" class="blog-desc"> Right food baked with natural ingredient, the use of best quality products
                        </a>
                        <div class="author align-items-center">
                            <img src="{{asset('public/frontend/images/a3.jpg')}}" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Elizabeth</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> July 13, 2020 </span>. <span
                                        class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container py-lg-5 py-md-4">

        
            <h3 class="section-title-left mb-4"> TIN HOT   
            <span class="fa fa-fire"></span> </h3>

        <div class="row">
            @foreach($views_post as $key => $views)
            <div  class="col-lg-6">
                <div class="bg-clr-white hover-box">
                    <div style="width: 500px; height: 300px;" class="row">
                        <div  class="col-sm-6 position-relative">
                            <a href="{{route('bai-viet.show',[$views->id])}}">
                                <img width="390px" height="300px" class="card-img-bottom d-block radius-image-full" src="{{asset('public/uploads/'.$views->image)}}"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-6 card-body blog-details align-self">
                            <span class="label-blue">{{$views->category->title}}</span>
                            <a href="{{route('bai-viet.show',[$views->id])}}" class="blog-desc">{{$views->title}}
                            </a>
                            
                            <div class="author align-items-center mt-3">
                               <img src="{{asset('images/hoc.jpg')}}" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">

                                    <li>


                                        <a href="#">Hoàng Học</a> 

                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> <span class="fa fa-clock-o"></span> {{$views->updated_at}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>


<div class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4">
        <h3 class="section-title-left mb-4"> SPECIAL</h3>
        <div class="row top-pics">
            @foreach($news_post2 as $key => $newsss)
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="top-pic1">
                    <img width="290px" height="250" class="card-img-bottom d-block radius-image-full"
                                        src="{{asset('public/uploads/'.$newsss->image)}}" alt="Card image cap">
                    

                    <div class="card-body blog-details">
                        <a href="{{route('bai-viet.show',[$newsss->id])}}" class="blog-desc">{{$newsss->title}}
                        </a>
                        <div class="author align-items-center">
                            <img src="{{asset('images/hoc.jpg')}}" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="author.html">Hoang Hoc</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> <span class="fa fa-clock-o"></span> {{$newsss->updated_at}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        
        </div>
    </div>
</div>


<div class="w3l-subscribe py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="w3l-subscribe-content text-center bg-clr-white py-md-5 py-2">
            <div class="py-5">
                <h3 class="section-title-left mb-2">Đăng ký nhận tin mới</h3>
                <p class="mb-md-5 mb-4">Bạn sẽ nhận được thông báo tin tức được cập nhật mới nhất về chủ đề bạn quan tâm  </p>
                <form action="#" method="GET" class="subscribe">
                    <input type="email" class="subscribe_input" name="search" placeholder="Email..." required="">
                    <button class="btn btn-style btn-primary">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- footer-28 block -->
@endsection