@extends('landing.layouts.app')
@section('content')
   <!--slider-->
   <section class="home-slider">
    <div class="slick-slider">
        <div class="img">
            <img src="{{asset("public/landing")}}/images/banner-1.jpg" alt="slider image">
        </div>
        <div class="img">
            <img src="{{asset("public/landing")}}/images/banner-3.jpg" alt="slider image">
        </div>
        <div class="img">
            <img src="{{asset("public/landing")}}/images/banner-2.jpg" alt="slider image">
        </div>
    </div>

    <div class="txt">
        <div class="container">
            <div class="inner">
                <h1>{{$homeSlider->title}}</h1>
                <h2>{{$homeSlider->sub_title}}
                </h2>
                <p>{{$homeSlider->description}}</p>
                <div class="get-started">
                    <a href="javascript:void(0);" class="clearfix myWorkLink" data-target="expert-service">
                        <span class="behind"></span>
                        <span class="front">Explore More <img src="{{asset("public/landing")}}/images/arrow.svg"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-->

<!--Expert  Service-->
<section id="feature" class="expert-service section-padding">
    <div class="container">
        <div class="heading">
            <h2>Expert Service you Can Trust</h2>
            <h3>Special Feature</h3>
        </div>

        <div class="es-box">
            <div class="single-es">
                <i class="fas fa-user"></i>
                <h2>{{$specialFeature[0]->title ?? ''}}</h2>
                <p>{{$specialFeature[0]->sub_title ?? ''}}</p>
            </div>
            <div class="single-es">
                <i class="fas fa-tags"></i>
                <h2>{{$specialFeature[1]->title ?? ''}}</h2>
                <p>{{$specialFeature[1]->sub_title ?? ''}}</p>
            </div>
            <div class="single-es">
                <i class="fas fa-thumbs-up"></i>
                <h2>{{$specialFeature[2]->title ?? ''}}</h2>
                <p>{{$specialFeature[2]->sub_title ?? ''}}</p>
            </div>
        </div>
    </div>
</section>
<!--end-->

<!--our vision-->
<section id="our-vision" class="our-vision section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="txt">
                    <div class="heading">
                        <h2>One Stop For all Services</h2>
                        <h3>Our Vision</h3>
                    </div>
                    <p>{{$ourVision->title}}</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="img">
                    <img src="{{asset("public/landing")}}/images/01.jpg" alt="our vision image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!--end-->

<!--our services-->
<section class="our-services section-padding">
    <div class="container">
        <div class="heading">
            <h2>Provide Worldwide Service For Good Customers</h2>
            <h3>Our Services</h3>
        </div>

        <div class="services-body">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <!--single-service-->
                    <div class="single-service">
                        <a href="{{route('online.marketing')}}">
                            <div class="icon">
                                <img src="{{asset("public/landing")}}/images/Online-marketing.png" alt="">
                            </div>
                            <h2>Online Marketing</h2>
                            <span>Read More <i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                    <!--end-->
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <!--single-service-->
                    <div class="single-service">
                        <a href="{{route('trading')}}">
                            <div class="icon">
                                <img src="{{asset("public/landing")}}/images/Trading.png" alt="">
                            </div>
                            <h2>Trading</h2>
                            <span>Read More <i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                    <!--end-->
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <!--single-service-->
                    <div class="single-service">
                        <a href="{{route('development')}}">
                            <div class="icon">
                                <img src="{{asset("public/landing")}}/images/Develop.png" alt="">
                            </div>
                            <h2>Develop</h2>
                            <span>Read More <i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                    <!--end-->
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <!--single-service-->
                    <div class="single-service">
                        <a href="{{route('online.service')}}">
                            <div class="icon">
                                <img src="{{asset("public/landing")}}/images/Online-services.png" alt="">
                            </div>
                            <h2>Online Services</h2>
                            <span>Read More <i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                    <!--end-->
                </div>

            </div>
        </div>
    </div>
</section>
<!--end-->

<!--portfolio-->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="heading">
            <h2>Our Latest Project</h2>
            <h3>Portfolio</h3>
        </div>
    </div>

    <div class="container">
        <div class="portfolio-slider">
            <div class="carousel">
                 @foreach($portFolio as $key => $value)
                    <div class="img">
                        <div class="overlay"></div>
                        <a href="{{$value->link}}">
                            <img src="{{$value->image}}" alt="{{$value->title}}" />
                            <h2>{{$value->title}}</h2>
                            <span class="link-arrow"><i class="fas fa-link"></i></span>
                        </a>
                    </div>
                 @endforeach
            </div>
        </div>
    </div>
</section>
<!--end-->

<!--postive strip-->
<section class="postive-strip">
    <div class="container">
        <div class="row">
            <!--single-ps-box-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-ps-box">
                    <div class="icon">
                        <span><img src="{{asset("public/landing")}}/images/icon1.png" alt=""></span>
                    </div>
                    <h2>500+</h2>
                    <span>Vendore</span>
                </div>
            </div>
            <!--end-->

            <!--single-ps-box-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-ps-box">
                    <div class="icon">
                        <span><img src="{{asset("public/landing")}}/images/icon2.png" alt=""></span>
                    </div>
                    <h2>1000+</h2>
                    <span>Project Completed</span>
                </div>
            </div>
            <!--end-->

            <!--single-ps-box-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-ps-box">
                    <div class="icon">
                        <span><img src="{{asset("public/landing")}}/images/icon3.png" alt=""></span>
                    </div>
                    <h2>999+</h2>
                    <span>Satisfied Client</span>
                </div>
            </div>
            <!--end-->

            <!--single-ps-box-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-6"  id="contact-section">
                <div class="single-ps-box">
                    <div class="icon">
                        <span><img src="{{asset("public/landing")}}/images/icon4.png" alt=""></span>
                    </div>
                    <h2>50+</h2>
                    <span>Services</span>
                </div>
            </div>
            <!--end-->
        </div>
    </div>
</section>
<!--end-->

<!--contact section-->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="img">
                    <img src="{{asset("public/landing")}}/images/08.png" alt="contact image">
                </div>
            </div>

            <div class="col-md-7">
                <form action="{{route('send.mail')}}" method="post">
                   @csrf
                    <div class="right-form">
                        <div class="contact-form">
                            <h2>Get in touch</h2>

                            <div class="form-group">
                                <input type="email" placeholder="Email*" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Name*" name="name" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Message*" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="button-hover">Send <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--end-->

<!--address strip-->
<section class="address-strip">
    <div class="container">
        <div class="row">

            <!--single-box-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-box left">
                    <a href="mailto:info@almotelq.com"><i class="fas fa-envelope"></i> info@almotelq.com</a>
                </div>
            </div>
            <!--single-box-->
            <!--single-box-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-box center">
                    <a href="javascript:void(0);"><i class="fas fa-map-marker-alt"></i> Riyadh, Saudi Arabia</a>
                </div>
            </div>
            <!--single-box-->
            <!--single-box-->
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="single-box right">
                    <a href="tel:+966561180282"><i class="fas fa-phone-alt"></i> +966 56 118 0282</a>
                </div>
            </div>
            <!--single-box-->

        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        $('.submenu-wrapper > a').click(function () {
            event.preventDefault();
            $(this).parent().toggleClass('submenuToggle');
        });
    });
</script>
<!--end-->
@endsection