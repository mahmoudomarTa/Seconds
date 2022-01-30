@extends('layouts.landing_page_layout')

@section('main_content')

        <div class="main-wrapper">

        <header id="header">
            <div class="container">
                <div class="logo-site">
                    <a href="#"><img src="{{$landingPage->logo}}" alt="{{$landingPage->logo}}   " class="img-responsive"></a>
                </div>
                <ul class="main_menu clearfix">
                    <li class="active"><a href="#home" rel="m_PageScroll2id">{{Lang::get('nav.home')}}</a></li>
                    <li><a href="#about" rel="m_PageScroll2id">{{Lang::get('nav.about')}}</a></li>
                    <li><a href="#features" rel="m_PageScroll2id">{{Lang::get('nav.features')}}</a></li>
                    <li><a href="#how-work" rel="m_PageScroll2id">{{Lang::get('nav.how_work')}}</a></li>
                    <li><a href="#reviews" rel="m_PageScroll2id">{{Lang::get('nav.reviews')}}</a></li>
                    <li><a href="#contact" rel="m_PageScroll2id">{{Lang::get('nav.connect')}}</a></li>

                    @if(app()->getLocale() == 'en')
                        <li><a href="{{url('index/ar')}}">AR</a></li>
                    @elseif(app()->getLocale() == 'ar')
                        <li><a href="{{url('index/en')}}">EN</a></li>
                    @endif


                </ul>
                <button type="button" class="hamburger is-closed">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
            </div>
        </header>
        <!--header-->

        <section class="section_home" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="home_txt">
                            <h1 class="wow fadeInUp">{{$landingPage->home_title}}</h1>
{{--                            <h1 class="wow fadeInUp">Best Mobile Apps Showcase</h1>--}}
                            <p class="wow fadeInUp">{{$landingPage->home_description}}</p>
                            <div class="download-app">
                                <ul class="btn-download-app wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
                                    <li class="">
                                        <a href="#">
                                            <p>{{$landingPage->google_play}}</p>
                                            <i class="zmdi zmdi-android"></i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#">
                                            <p>{{$landingPage->app_store}}</p>
                                            <i class="zmdi zmdi-apple"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home_thumbs wow zoomInDown">
{{--                            <img src="{{asset('images/'.$landingPage->home_image)}}" alt="img-responsive">--}}
                            <img src="{{$landingPage->home_image}}" alt="img-responsive">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section_home-->

        <section class="sec-site">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box-sec">
                            <figure><img src="{{$landingPage->like_image}}" alt="" /></figure>
                            <div class="sec-title">
                                <h2>8,300+</h2>
                                <p>{{$landingPage->likes}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-sec">
                            <figure><img src="{{$landingPage->communication_image}}" alt="" /></figure>
                            <div class="sec-title">
                                <h2>3,000+</h2>
                                <p>{{$landingPage->communication}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-sec">
                            <figure><img src="{{$landingPage->advertising_image}}" alt="" /></figure>
                            <div class="sec-title">
                                <h2>103,570+</h2>
                                <p>{{$landingPage->advertising}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-sec">
                            <figure><img src="{{$landingPage->users_image}}" alt="" /></figure>
                            <div class="sec-title">
                                <h2>123,000+</h2>
                                <p>{{$landingPage->users}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section_home-->

        <section class="section_about" id="about">
            <div class="container">
                <div class="flex-about">
                    <div class="ab-right">
                        <div class="img-about">
                            <img src="{{$landingPage->about_image}}" alt="" />
                        </div>
                    </div>
                    <div class="ab-left">
                        <div class="box-about">
                            <div class="head-about">
                                <h2>{{$landingPage->about}}</h2>
                                <p>{{$landingPage->descreption}}</p>
                            </div>
                            <ul>
                                <li><p>{{$landingPage->first_about}} </p></li>
                                <li><p>{{$landingPage->second_about}}</p></li>
                                <li><p>{{$landingPage->third_about}}</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section_services-->

        <section class="section_features" id="features">
            <div class="container">
                <div class="sec_head wow fadeInUp">
                    <h2>{{$landingPage->features}}</h2>
                    <p>{{$landingPage->features_description}}</p>
                </div>
                <div class="owl-carousel" id="feat-slider">


                    @foreach($features as $feature)
                        <div class="item">
                            <div class="box-features">
                                <div class="sec-title">
                                    <h5>{{$feature->title}}</h5>
                                    <p>{{$feature->description}}</p>
                                </div>
                                <figure>
                                    <img src="{{$feature->image}}" alt="" />
                                </figure>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--section_portfolio-->

        <section class="section_how_work" id="how-work">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="work-item">
                            <img src="{{$landingPage->how_it_works_image}}" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="head-title wow fadeInUp">
                            <h2>{{$landingPage->how_works}}</h2>
                            <p>{{$landingPage->how_works_description}}</p>
                        </div>
                        <ul class="list-work">
                            <li>
                                <h3>{{$landingPage->first_step}}</h3>
                                <p>{{$landingPage->first_step_description}}</p>
                            </li>
                            <li>

                                <h3>{{$landingPage->second_step}}</h3>
                                <p>{{$landingPage->second_step_description}}</p>

                            </li>
                            <li>
                                <h3>{{$landingPage->third_step}}</h3>
                                <p>{{$landingPage->third_step_description}}</p>
                            </li>
                            <li>
                                <h3>{{$landingPage->fourth_step}}</h3>
                                <p>{{$landingPage->fourth_step_description}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--section_how_work-->

        <section class="section_customer_opinions" id="reviews">
            <div class="container">
                <div class="sec_head wow fadeInUp">
                    <h2>{{$landingPage->client_say}}</h2>
                </div>
                <div class="owl-carousel" id="slider-testi">

                    @foreach($comments as $comment)
                        <div class="item">
                            <div class="content-testi">
                                <figure>
                                    <img src="{{asset($comment->image)}}" alt="" />
                                </figure>
                                <p>{{$comment->comment_text}}</p>
                                <div class="sec-title">
                                    <h6>{{$comment->user_name}}</h6>
                                    <div class="star-rating">
                                        <span style="width:{{$comment->rating * 20}}%" ><strong class="rating">{{$comment->rting}}</strong> out of 5</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>
        <!--section_customer_opinions-->

        <section class="section_contact" id="contact">
            <div class="container">
                <div class="sec_head wow fadeInUp">
                    <h2>{{$landingPage->contact_us}}</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="ph-head">{{$landingPage->contact_information}}</p>
                        <ul class="list-contact">
                            <li>
                                <figure>
                                    <img src="{{$landingPage->location_image}}" alt="Location" />
                                    <span>{{$landingPage->location}}</span>
                                </figure>
                                <div class="sec-title">
                                    <p>{{$landingPage->location_value}}</p>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="{{$landingPage->email_image}}" alt="Email" />
                                    <span>{{$landingPage->email}}</span>
                                </figure>
                                <div class="sec-title">
                                    <p class="number-site">{{$landingPage->email_value}}</p>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="{{$landingPage->mobile_image}}" alt="Mobail" />
                                    <span>{{$landingPage->mobile}}</span>
                                </figure>
                                <div class="sec-title">
                                    <p class="number-site">{{$landingPage->mobile_value}}</p>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="{{$landingPage->phone_image}}" alt="Phone" />
                                    <span>{{$landingPage->phone}}</span>
                                </figure>
                                <div class="sec-title">
                                    <p>{{$landingPage->phone_valueF}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="ph-head">{{$landingPage->contact_form}}</p>
                        <form class="form-contact" action="{{url('message/store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="user_name" class="form-control" placeholder="{{$landingPage->full_name}}" />
                                <img src="{{$landingPage->full_name_image}}" alt="User Name" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="{{$landingPage->email}}" />
                                <img  src="{{$landingPage->email_image}}" alt="Email" />
                            </div>
                            <div class="form-group des-mess">
                                <textarea class="form-control" name="message"  placeholder="{{$landingPage->write_your_message}}"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn-send"><span>{{$landingPage->send}}</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--section_contact-->

        <footer id="footer">
            <div class="container">
                <div class="social-media wow fadeInUp">
                    <li class="twitter"><a href="{{url('twitter/'.app()->getLocale())}}"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li class="facebook"><a href="{{url('facebook')}}"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li class="instagram"><a href="{{url('instagram')}}"><i class="fa fa-instagram"></i></a></li>
                </div>
                <div class="flex-ft">
                    <p class="copyRight number-site">{{$landingPage->copy_write}}</p>
                </div>
            </div>
        </footer>
        <!--footer-->

    </div>
    <!--main-wrapper-->


@stop
