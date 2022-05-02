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
<link rel="stylesheet" href="{{ url('/') }}/css/owl.theme.default.min.css" />
<link rel="stylesheet" href="{{ url('/') }}/css/fonts.css" />
<link rel="stylesheet" href="{{ url('/') }}/css/style.css" />
<link rel="stylesheet" href="{{ url('/') }}/css/responsive.css"/>
</head>
<body class="white-bg">

        <div id="event_page_wrap" vocab="http://schema.org/" typeof="Event">
            @yield('content')
        </div>

        @include("Shared.Partials.LangScript")
        {!!Html::script(config('attendize.cdn_url_static_assets').'/assets/javascript/frontend.js')!!}

        
        <footer>
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
                                            <button type="button" id='subscribedbtn'><img src="{{ url('/') }}/images/submit-btn1.png"></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="address">
                                <div class="address-left">
                                    Global Avenue 2,Mehrauli-<br />Gurgaon Rd, Aya Nagar,<br /> New Delhi, Delhi 110047
                                </div>
                                <div class="address-right">
                                    <a href="javascript:;"><img src="{{ url('/') }}/images/address-link.png"></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-top-left">
                            <div class="getintouch">
                                <h4>Get in touch or<br /> chat with us</h4>
                            </div>
                            <div class="getintouchemail">
                                <h4><a href="mailto:info@studioekko.com">info@studioekko.com</a></h4>
                                <h4><a href="tel:+91 91490 87149">+91 91490 87149</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="copy-right1"><i class="fa fa-copyright" aria-hidden="true"></i> 2022 Studio Ekko</div>
                    <div class="copy-right2">
                        <ul>
                            <li><a href="javascript:;">INSTAGRAM</a></li>
                            <li><a href="javascript:;">FACEBOOK</a></li>
                            <li><a href="javascript:;">LINKEDIN</a></li>
                        </ul>
                    </div>
                    <div class="copy-right3">
                        made with <img src="{{ url('/') }}/images/heart.png" /> By studio Snow Show
                    </div>
                </div>
            </div>
        </footer>



</body>
</html>
