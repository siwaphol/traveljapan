<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Prices</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
    {{--<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body class="" id="top">
<!--==============================header=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <h1>
                <a href="{{url('/')}}">
                    <img src="{{asset('assets/images/logo.png')}}" alt="Your Happy Family">
                </a>
            </h1>

        </div>
    </div>
    <div class="clear"></div>
    <div class="menu_block">
        <nav class="horizontal-nav full-width horizontalNav-notprocessed">
            <ul class="sf-menu">
                <li><a href="{{url('/')}}">Home </a></li>
                <li><a href="{{url('/plan')}}">Plan Trip</a></li>
                <li><a href="{{url('/contact')}}">Contacts</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div>
</header>

<!--=====================Content======================-->
<section class="content">
@yield('content')
</section>
<!--==============================Bot_block=================================-->
<!--==============================footer=================================-->
<footer>
    <div class="container_12">
        <div class="row">
            <div class="grid_12">
                <a href="#" onclick="goToByScroll('top'); return false;" class="top"></a><br> <a href="#" class="f_logo"><img src="{{asset('assets/images/f_logo.png')}}" alt=""></a>
                <div class="footer_socials">
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
                <div class="copy"><span class="brand">TidyHome </span>  &copy; <span id="copyright-year"></span>  | <a href="#">Privacy Policy</a>
                    <div class="sub_copy">Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</footer>


<!-- =========================================map=================================== -->

<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('assets/js/jquery-migrate-1.1.1.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/superfish.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.equalheights.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script>

    function goToByScroll(id){$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');}

</script>

{{--with callback--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFdgrOzvzo6gtvPnfnXlDnfFtcicLrvBM&signed_in=true&callback=initMap"--}}
        {{--async defer></script>--}}
{{--without callback--}}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFdgrOzvzo6gtvPnfnXlDnfFtcicLrvBM&signed_in=true"
        async defer></script>

</body>
</html>

