<!DOCTYPE html>
<html lang="{{ Lang::locale() }}">
<head>
   
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekko</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0ae84d8b4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('/') }}/css/owl.carousel.min.css" />
    <link rel="stylesheet/less" type="text/css" href="{{ url('/') }}/css/clndr.less" />
    <link rel="stylesheet" href="{{ url('/') }}/css/owl.theme.default.min.css" />
    <link rel='stylesheet' href="{{ url('/') }}/css/flatpickr.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/events-style.css" />
    <link rel="stylesheet" href="{{ url('/') }}/css/fonts.css?v=<?php echo date("s");?>" />
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css?v=<?php echo date("s");?>" />
    <link rel="stylesheet" href="{{ url('/') }}/css/responsive.css?v=<?php echo date("s");?>" />
	 <link rel="stylesheet" href="{{ url('/') }}/css/responsive_v.css?v=<?php echo date("s");?>" />
   
</head>
<body class="{{ $class }}">

   <div class="megamenu">
                <header>
                    <div class="logo"><a href="javascript:;"><img src="{{ url('/') }}/images/logo.svg" alt="logo" /></a></div>
                    <div class="trigger close"><a href="javascript:;">
                           <img src="{{ url('/') }}/images/close.svg">
                        </a></div>
                </header>
                <div class="megamenu-inner">
                    <div class="m-menu">
                        <a href="{{route('home')}}">HOME</a>
                        <a href="{{route('events')}}">CALENDAR</a>
                        <a href="{{route('connect')}}">CONNECT</a>
                        <a href="{{route('insider')}}">INSIDER</a>
                    </div>
                </div>
            </div>


@yield('content')

<footer id="footer">
    <div class="wrapper">
        <div class="footer-top-outer">
            <div class="footer-top">
                <div class="footer-top-left w40">
                    <div class="subscribe">
                        <h4>Sign up for updates</h4>
                        <form id="subscribed" method="post" action="{{route('saveSubscription')}}">
                            @csrf

                            <div class="subscribe-form">
                                <div class="inputfield">
                                    <input type="text" class="required" id="subsribeinput" name="subscribe" placeholder="TYPE YOUR EMAIL HERE">
                                </div>
                                <div class="submitbtn">
                                    <button type="button" id='subscribedbtn'><img src="{{ url('/') }}/images/footer-sc1.svg" class="footer-sc1"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="address">
                        <div class="address-left">
                            Global Avenue 2,Mehrauli-<br />Gurgaon Rd, Aya Nagar,<br /> New Delhi, Delhi 110047
                        </div>
                        <div class="address-right">
                            <a href="javascript:;"><img src="{{ url('/') }}/images/footer-sc2.svg" class="footer-sc1"></a>
                        </div>
                    </div>
                </div>
                <div class="footer-top-left w40">
                    <div class="getintouch">
                        <h4>Get in touch or<br /> chat with us</h4>
                        <div class="address-right">
                                <a href="javascript:;"><img src="{{ url('/') }}/images/gt.png"></a>
                            </div>
                    </div>
                    <div class="getintouchemail">
                        <h4><a href="mailto:info@studioekko.com">info@studioekko.com</a></h4>
                        <h4><a href="tel:+91 91490 87149">+91 91490 87149</a></h4>
                    </div>
                </div>
            </div>
        </div>
       <div class="copyright">
                <div class="copy-right1">
                    <!-- <i class="fa fa-copyright" aria-hidden="true"></i> 2022 Studio Ekko -->
                    <img src="{{ url('/') }}/images/cb1.svg">
                </div>
                <div class="copy-right2 desktop-only">
                    <ul>
                        <li><a href="javascript:;">INSTAGRAM</a></li>
                        <li><a href="javascript:;">FACEBOOK</a></li>
                        <li><a href="javascript:;">LINKEDIN</a></li>
                    </ul>
                </div>
                <div class="copy-right3">
                    <!-- made with <img src="images/heart.png" /> By studio Snow Show -->
                    <img src="{{ url('/') }}/images/cb2.svg">
                </div>
            </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script src="js/jquery.min.js"></script> -->
<script src="{{ url('/') }}/js/owl.carousel.js"></script>
<!-- <script src="js/stickySidebar.js"></script> -->
<script src="{{ url('/') }}/js/scroll-animation.js"></script>
<script src="{{ url('/') }}/js/gsap-latest-beta.min.js?r=5426"></script>
<script src="{{ url('/') }}/js/ScrollTrigger.min.js?v=3.3"></script>
<script src="{{ url('/') }}/js/custom.js"></script>

<script src="/js/events/less.js" type="text/javascript"></script>
<!--<![endif]-->

<script src="{{ url('/') }}/js/events/prism.js" type="text/javascript"></script>
<script src="{{ url('/') }}/js/events/underscore.js" type="text/javascript"></script>
<script src="{{ url('/') }}/js/events/moment.js" type="text/javascript"></script>
<script src="{{ url('/') }}/js/events/clndr.js" type="text/javascript"></script>

<script src="{{ url('/') }}/js/site.js" type="text/javascript"></script>
<!-- <script src="js/script-scroll.js"></script> -->
<script>
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
            if (scroll >= 700) {
                $(".blackbg header").addClass("darkHeader");
            }
			if (scroll >= 100) {
                $(".white-bg header").addClass("darkHeader");
            }
            else{
            $(".blackbg header").removeClass("darkHeader");
			$(".white-bg header").removeClass("darkHeader");
            }
        }); 



        gsap.utils.toArray(".comparisonSection").forEach(section => {
        let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: section,
                    start: "center center",
            // makes the height of the scrolling (while pinning) match the width, thus the speed remains constant (vertical/horizontal)
                    end: () => "+=" + section.offsetWidth, 
                    scrub: true,
                    pin: true,
            anticipatePin: 1
                },
                defaults: {ease: "none"}
            });
        tl.fromTo(section.querySelector(".afterImage"), { xPercent: 50, x: 0}, {xPercent: 0})
        // ...and the image the opposite way (at the same time)
        .fromTo(section.querySelector(".afterImage img"), {xPercent: -100, x: 0}, {xPercent: 0}, 0);
    });



var aud11 = document.getElementById("video11");
var audn12 = document.getElementById("video12");
var aud13 = document.getElementById("video13");
var aud14 = document.getElementById("video14");
aud11.onended = function() {
    //alert('video12 play')
    $("#video12").parent().addClass('active');
    $("#video11").parent().removeClass('active');
    $("#video12").get(0).play();
    $("#video11").hide()
    $("#video13").get(0).pause();
    $("#video13").show();
};

audn12.onended = function() {
    //alert('video13 play')
    $("#video13").parent().addClass('active');
    $("#video12").parent().removeClass('active');
    $("#video13").get(0).play()
    $("#video14").get(0).pause();
    $("#video14").show();
    $("#video12").hide()
};
aud13.onended = function() {
    //alert('video14 play')
    $("#video14").parent().addClass('active');
    $("#video13").parent().removeClass('active');
    $("#video14").get(0).play();
    $("#video11").get(0).pause();
    $("#video11").show();
    $("#video13").hide()
};
aud14.onended = function() {
   // alert('video15 play')
    $("#video11").parent().addClass('active');
    $("#video14").parent().removeClass('active');
    $("#video11").get(0).play()
    $("#video12").get(0).pause();
    $("#video12").show();
    $("#video14").hide()
};



</script>



@yield('scripts')
</body>
</html>
