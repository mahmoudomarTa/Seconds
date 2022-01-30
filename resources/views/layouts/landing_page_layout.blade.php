<!DOCTYPE html>

<html @if(app()->getLocale()=='ar') dir="rtl" lang="ar" @endif >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>60 Seconds</title>

    <link href={{asset('landing_page/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('landing_page/css/material-design-iconic-font.css')}} rel="stylesheet">
    <link href={{asset('landing_page/css/font-awesome.css')}} rel="stylesheet">
    <link href={{asset('landing_page/css/owl.carousel.min.css')}} rel="stylesheet">
    <link href={{asset('landing_page/css/owl.theme.default.min.css')}} rel="stylesheet">
    <link href={{asset('landing_page/css/animate.css')}} rel="stylesheet">
    <link href={{asset('landing_page/css/style.css')}} rel="stylesheet">

    <!-- Responsive -->
    <link href={{asset('landing_page/css/responsive.css')}} rel="stylesheet">

    <script src="{{ asset('landing_page/js/jquery-3.2.1.min.js') }}" ></script>

</head>
<body>
<div class="mobile-menu">
    <div class="menu-mobile">
        <div class="brand-area">
            <a href="#">
                <img src="{{url('landing_page/images/logo.svg')}}">

            </a>
        </div>
        <div class="mmenu">
            <ul>
                <li class="active"><a href="#home" rel="m_PageScroll2id">Home</a></li>
                <li><a href="#about" rel="m_PageScroll2id">About</a></li>
                <li><a href="#features" rel="m_PageScroll2id">Features</a></li>
                <li><a href="#how-work" rel="m_PageScroll2id">How Work</a></li>
                <li><a href="#reviews" rel="m_PageScroll2id">Reviews</a></li>
                <li><a href="#contact" rel="m_PageScroll2id">Connect</a></li>
                <li><a>AR</a></li>
            </ul>
        </div>
    </div>
    <div class="m-overlay"></div>
</div>
<!--mobile-menu-->

@yield('main_content')


<script src="{{ asset('landing_page/js/popper.min.js') }}" ></script>
<script src="{{ asset('landing_page/js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('landing_page/js/owl.carousel.min.js') }}" ></script>
<script src="{{ asset('landing_page/js/jquery.malihu.PageScroll2id.min.js') }}" ></script>
<script src="{{ asset('landing_page/js/wow.js') }}" ></script>
<script src="{{ asset('landing_page/js/script.js') }}" ></script>


<script>

    new WOW().init();

    (function($){
        $(window).on("load",function(){

            /* Page Scroll to id fn call */
            $("a[rel='m_PageScroll2id']").mPageScroll2id({
                scrollSpeed: 1200
                ,scrollEasing:"easeOutQuint"
                ,liveSelector:"a[rel='m_PageScroll2id']"
            });

        });
    })(jQuery);

    istener(window, 'load', initialize);
</script>

</body>
</html>
