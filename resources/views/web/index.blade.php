@extends('web.template')

@section('content')
 <section class="home-banner">
        <div class="bannervideo">
            <header>
                <div class="logo"><a href="{{ url('/') }}"><img src="{{ url('/') }}/images/logo.svg" alt="logo" /></a></div>
                <div class="trigger"><a href="javascript:;">
                        <span></span>
                        <span></span>
                    </a></div>
            </header>


         
			
			<ul id="nav-links" class="ready">
				<li class="anchor"><a class="contact" href="#footer">Contact</a></li>
				<li class="anchor"><a class="space" href="#space">Space</a></li>
				<li class="anchor"><a class="event" href="#event">Event</a></li>
				<li class="anchor"><a class="home active" href="#home">Home</a></li>
			</ul>
			
            <!--video width="320" height="240" muted autoplay loop="true">
                <source src="{{ url('/') }}/images/video.mp4" type="video/mp4">
                <source src="{{ url('/') }}/images/video.mp4" type="video/ogg">
            </video-->
			
			
			<div class="main-video-ekkon" id="home">
                <div id="video-ekkon1" class="active">
                    <div class="bc_1_bl"></div>
                    <video width="320" height="240" muted autoplay id="video11">
                        <source src="{{ url('/') }}/images/Left1_1.mp4" type="video/mp4">
                        <source src="{{ url('/') }}/images/Left1_1.mp4" type="video/ogg">
                    </video>
                    <video width="320" height="240" muted autoplay id="video13">
                        <source src="{{ url('/') }}/images/Left2.mp4" type="video/mp4">
                        <source src="{{ url('/') }}/images/Left2.mp4" type="video/ogg">
                    </video>
                </div>
                <div id="video-ekkon2">
                    <div class="bc_1_bl"></div>
                    <video width="320" height="240" muted  id="video12">
                        <source src="{{ url('/') }}/images/Right-1.mp4" type="video/mp4">
                        <source src="{{ url('/') }}/images/Right-1.mp4" type="video/ogg">
                    </video>
                    <video width="320" height="240" muted  autoplay id="video14">
                        <source src="{{ url('/') }}/images/Right2.mp4" type="video/mp4">
                        <source src="{{ url('/') }}/images/Right2.mp4" type="video/ogg">
                    </video>
                </div>
            </div>
			
			
            <div class="banner-black-hover">
            </div>
            <div class="home-banner-caption">
                <img src="{{ url('/') }}/images/banner-caption.svg">
                <h3>One space<div><span class="abl">MANY</span> <span class="btl">STORIES</span></div></h3>
            </div>
        </div>
    </section>

    <section class="home-section2">
        <div class="home-section2-inner">
            <p>At Studio Ekko, we believe creating a space can create <span>culture, communities</span> and
                <span>collaborations.</span></p>
            <p>We are an <span>adaptive studio</span> space that comes alive with a new purpose everyday.</p>
        </div>
    </section>

    <section class="home-section3">
        <div class="wrapper">
            <div class="home-cat-main">
                <div class="home-cat" style="background-image: url({{ url('/') }}/images/cat1.png);"><a href="javascript:;">Music</a></div>
                <div class="home-cat" style="background-image: url({{ url('/') }}/images/cat2.png);"><a href="javascript:;">Fitness</a></div>
                <div class="home-cat" style="background-image: url({{ url('/') }}/images/cat3.png);"><a href="javascript:;">Arts</a></div>
                <div class="home-cat" style="background-image: url({{ url('/') }}/images/cat4.png);"><a href="javascript:;">Film</a></div>
                <div class="home-cat" style="background-image: url({{ url('/') }}/images/cat5.png);"><a href="javascript:;">Corporate</a></div>
                <div class="home-cat" style="background-image: url({{ url('/') }}/images/cat6.png);"><a href="javascript:;">Stand-Up</a></div>
            </div>
			
			<div class="draw-line">
			<p>Scroll Down for More</p>
				<div class="line">
					<div class="draw-line-inner hscroll-line">
					</div>
				</div>
			</div>
			
			
        </div>
    </section>
	
	<!-- EVENT SECTION START -->
	<section class="event-area">
		<div class="grid-wrap">
			<div class="grid">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
			
		</div>
	
        <div class="">
        <div class="event min_rgt">
            <div class="event-inner">
                <div class="event-inner-left">
                    <img src="{{ url('/') }}/images/event-th1.jpg">
                </div>
                <div class="event-inner-right">
                    <img src="{{ url('/') }}/images/event-th2.jpg">
                </div> 
            </div>
           <div class="event-inner">
				<div class="event-inner-left">
					<div class="txt_bx">
						<h2><span>FOR</span> freelancers <br><span>& rising</span> businesses</h2>
						<p>Our platform helps in attracting the right <br>audience, scaling up, marketing and monetizing <br>your skills.</p>
					</div>
				</div>
                <div class="event-inner-right">
                    <img src="{{ url('/') }}/images/event-th3.jpg">
                </div>
            </div>
		   
		   <div class="event-inner">
                <div class="event-inner-left">
                </div>
                <div class="event-inner-right">
                   <div class="arow-down"><a href="javascript:;"><img src="{{ url('/') }}/images/arrow-down.svg" alt="" title="" /></a></div>
                </div> 
            </div>
    
        </div>
		
		<div class="event min_lft">
            <div class="event-inner">
                <div class="event-inner-left">
                    <img src="{{ url('/') }}/images/l1.png">
                </div>
                <div class="event-inner-right">
                    <img src="{{ url('/') }}/images/l2.png">
                </div> 
            </div>
           <div class="event-inner">
				<div class="event-inner-left">
					<div class="txt_bx pl-5">
						<h2><span>FOR</span> CURIOUS <span>SOULS</span><br/> <span>& rising</span> SEEKERS <span>OF FUN</span></h2>
						<p>For anyone new to the city, it's a great place<br/> to mingle, make new friends, explore new<br/> skills and find your community.  </p>
					</div>
				</div>
                <div class="event-inner-right">
                    <img src="{{ url('/') }}/images/l3.png">
                </div>
            </div>
		   
		   <div class="event-inner">
                <div class="event-inner-left">
					<div class="arow-right"><a href="javascript:;"><img src="{{ url('/') }}/images/arow-right.svg" alt="" title="" /></a></div>
                </div>
                <div class="event-inner-right">
                   <div class="arow-down event-btn"><a href="javascript:;">EVENTS</a></div>
                </div> 
            </div>
    
        </div>
		
		
		
		
		 <div class="event min_rgt Mobileevent">
            <div class="event-inner Mobileevent_inner1">
                <div class="event-inner-left">
                    <div class="txt_bx">
                        <h2><span>FOR</span> freelancers <br><span>& rising</span> businesses</h2>
                    </div>
                </div>
            </div>
            <div class="event-inner Mobileevent_inner2">
                <div class="event-inner-left">
                    <img src="{{ url('/') }}/images/event-th1.jpg">
                </div>
                <div class="event-inner-left">
                    <img src="{{ url('/') }}/images/event-th2.jpg">
                </div>
            </div>
            
            <div class="event-inner Mobileevent_inner3">
                <div class="event-inner-right">
                    <div class="arow-down"><a href="javascript:;"><img src="{{ url('/') }}/images/arrow-down.svg" alt="" title="" /></a></div>
                </div> 
            </div>
            <div class="event-inner-left Mobileevent_inner4">
                <div class="txt_bx pl-5">
                    <p>For anyone new to the city, it's a great place  to mingle, make new friends, explore new  skills and find your community. </p>
                </div>
            </div>

           
    
        </div>
        
        <div class="event min_rgt Mobileevent2">
            <div class="event-inner Mobileevent_inner1">
                <div class="event-inner-left">
                    <div class="txt_bx">
                      <h2><span>FOR</span> CURIOUS <span>SOULS</span><br/> <span>& rising</span> SEEKERS <span>OF FUN</span></h2>
					
                    </div>
                </div>
            </div>
            <div class="event-inner Mobileevent_inner2">
                <div class="event-inner-left">
                    <img src="{{ url('/') }}/images/l1.png">
                </div>
                <div class="event-inner-left">
                    <img src="{{ url('/') }}/images/l2.png">
                </div>
            </div>
            
            <div class="event-inner Mobileevent_inner3">
                <div class="event-inner-right">
                    <div class="arow-down"><a href="javascript:;"><img src="{{ url('/') }}/images/arrow-down.svg" alt="" title="" /></a></div>
                </div> 
            </div>
            <div class="event-inner-left Mobileevent_inner4">
                <div class="txt_bx pl-5">
                   	<p>For anyone new to the city, it's a great place to mingle, make new friends, explore new skills and find your community.  </p>
					
                </div>
            </div>

            <div class="event-inner-left Mobileevent_inner4 Mobileevent_inner5">
                <div class="txt_bx pl-5">
                    <h4><a href="javascript:;">EVENTS</a></h4>
                </div>
            </div>
    
        </div>
		
		
		
		
		
		
        </div>
    </section>
	<!-- EVENT SECTION END -->


    <section class="home-event-section" id="event">
        <div class="wrapper">
            <div class="home-event-main">
                <div class="home-event1">
                    <h2>STAY CONNECTED WITH THE UPCOMING EVENTS</h2>
                    <div class="view-all-events">
						<a href="javascript:;"><img src="{{ url('/') }}/images/view-event-icon.png">VIEW THE FULL CALENDAR</a>
					</div>
                </div>
                <div class="home-event2">
                    <div class="home-event-th"><img src="{{ url('/') }}/images/home-event1.png"></div>
                    <div class="home-event-hour">15.10 THURS</div>
                    <div class="home-event-title"><a href="javascript:;">Aerial Yoga: Introductory Class</a></div>
                    <div class="home-event-place">FLYING MONKEY AERIAL ARTS</div>
                    <div class="home-event-cat">Fitness</div>
                </div>
                <div class="home-event2">
                    <div class="home-event-th"><img src="{{ url('/') }}/images/home-event1.png"></div>
                    <div class="home-event-hour">15.10 THURS</div>
                    <div class="home-event-title"><a href="javascript:;">Aerial Yoga: Introductory Class</a></div>
                    <div class="home-event-place">FLYING MONKEY AERIAL ARTS</div>
                    <div class="home-event-cat">Fitness</div>
                </div>
                <div class="home-event2">
                    <div class="home-event-th"><img src="{{ url('/') }}/images/home-event1.png"></div>
                    <div class="home-event-hour">15.10 THURS</div>
                    <div class="home-event-title"><a href="javascript:;">Aerial Yoga: Introductory Class</a></div>
                    <div class="home-event-place">FLYING MONKEY AERIAL ARTS</div>
                    <div class="home-event-cat">Fitness</div>
                </div>
            </div>
			
			
			   <div class="mob-slider-evn">
                <div class="eventmobile-slider">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="home-event2">
                            <div class="home-event-th"><img src="{{ url('/') }}/images/home-event1.png"></div>
                            <div class="home-event-hour">15.10 THURS</div>
                            <div class="home-event-title"><a href="javascript:;">Aerial Yoga: Introductory Class</a></div>
                            <div class="home-event-place">FLYING MONKEY AERIAL ARTS</div>
                            <div class="home-event-cat">Fitness</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="home-event2">
                            <div class="home-event-th"><img src="{{ url('/') }}/images/home-event1.png"></div>
                            <div class="home-event-hour">15.10 THURS</div>
                            <div class="home-event-title"><a href="javascript:;">Aerial Yoga: Introductory Class</a></div>
                            <div class="home-event-place">FLYING MONKEY AERIAL ARTS</div>
                            <div class="home-event-cat">Fitness</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="home-event2">
                            <div class="home-event-th"><img src="{{ url('/') }}/images/home-event1.png"></div>
                            <div class="home-event-hour">15.10 THURS</div>
                            <div class="home-event-title"><a href="javascript:;">Aerial Yoga: Introductory Class</a></div>
                            <div class="home-event-place">FLYING MONKEY AERIAL ARTS</div>
                            <div class="home-event-cat">Fitness</div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>




            <div class="mbc">
                <div class="view-all-events">
                    <a href="javascript:;"><img src="{{ url('/') }}/images/view-event-icon.png">VIEW THE FULL<br/> CALENDAR</a>
                </div>
            </div>
			
			
			
        </div>
    </section>



	
	
	
	 <section class="afi-section" id="space">
        <div class="wrapper">
            <div class="afi-section-hd">If staying indoors is not your idea of a day well-spent, <span>come on over to
                    Studio Ekko!</span> <img src="{{ url('/') }}/images/afix-link.png">
			</div>
        </div>
        <div class="ab-studio">
            <div class="ab-studio-inner ab-studio-inner1 secv">
                <div class="ab-studio-inner-left">
                    <img src="{{ url('/') }}/images/ab-home.png">
                </div>
                <div class="ab-studio-inner-right">
                    <p>Energize your body and spirit with <span>aerial yoga</span>, attend an <span>art workshop</span>,
                        watch a movie <span>screening</span> or bounce a <span>startup</span> idea off a bunch of
                        unbiased listeners. </p>
                </div>
            </div>
            <div class="ab-studio-inner ab-studio-inner2 secv">
                <div class="ab-studio-inner-left">
                    <img src="{{ url('/') }}/images/ab-home.png">
                </div>
                <div class="ab-studio-inner-right">
                    <p>Towards the end of the day, kick your feet up over a <span>sundowner</span> in the lawn - some
                        artisanal coffee or hand churned sorbet and share stories. </p>
                </div>
            </div>
            <div class="ab-studio-inner ab-studio-inner3 secv">
                <div class="ab-studio-inner-left">
                    <img src="{{ url('/') }}/images/ab-home.png">
                </div>
                <div class="ab-studio-inner-right">
                    <p>Find the <span>stimulus</span> you need to take your personal project forward. </p>
                </div>
            </div>
            <div class="ab-studio-inner ab-studio-inner4 secv">
                <div class="ab-studio-inner-left">
                    <img src="{{ url('/') }}/images/ab-home.png">
                </div>
                <div class="ab-studio-inner-right">
                    <p>
                        Ekko resonates with the spirit of conscious, supportive, like-minded people coming together -
                        <span>a place and community you can call your own. </span> </p>
                </div>
            </div>
        </div>
    </section>
	
	
	



    <section class="ekkon-exp">
        <div class="wrapper">
            <div class="ekkonexp-heading">THE EKKO EXPERIENCE</div>
        </div>
        <div class="ekkon-video">
            <div class="ekkon-video-inner">
                <div class="ekkon-video-border">
                    <video width="320" height="240" muted autoplay loop="true">
                        <source src="{{ url('/') }}/images/my-video2.mp4" type="video/mp4">
                        <source src="{{ url('/') }}/images/my-video2.mp4" type="video/ogg">
                    </video>
                </div>
            </div>
        </div>
    </section>


    <section class="home-gate1 home-gate3">
        <div class="wrapper">
            <div class="home-gate-section1 home-gate-section3">
                <div class="home-gate-section1-inner home-gate-section1-inner2">
                    <h1>28.48° <span>N</span><br />
                        77.13° <span>E</span> </h1>
                    <p>Studio Ekko is an open, multifunctional studio space that can host a variety of events and
                        workshops. With a xx ft high ceiling, it is ideal for activities with a large spatial
                        requirement like fitness classes, art exhibitions, social gatherings and live performances. </p>
                </div>
            </div>
        </div>
        <div class="main-gate">
            <img src="{{ url('/') }}/images/Ekko-Experience.png">
        </div>
    </section>




    <section class="home-gate1">
        <div class="wrapper">
            <div class="home-gate-section1 home-gate-section2">
                <div class="home-gate-section1-inner home-gate-section1-inner2">
                    <h1><span>M</span> / <span>l</span> / <span>xl</span> </h1>
                    <p>With a collapsible partition, the studio can be transformed into 2 partial spaces and 1 complete
                        space to suit your requirement. </p>
                </div>
            </div>
        </div>
        <!--div class="main-gate">
            <img src="{{ url('/') }}/images/white-gate.png"-->
            <!-- <img src="{{ url('/') }}/images/gate.png"> -->
          <!-- partial -->
        <!--/div-->

        <section class="comparisonSection">
            <div class="comparisonImage beforeImage">
              <!--img src="{{ url('/') }}/images/white-gate.png" alt="before"-->
			  <img src="{{ url('/') }}/images/Doors_1.png" alt="before">
            </div>
            <div class="comparisonImage afterImage">
              <img src="{{ url('/') }}/images/bl-bg.jpg" alt="after">
            </div>
          </section>


    </section>





    <section class="home-gate">
        <div class="wrapper">
            <div class="home-gate-section1">
                <div class="home-gate-section1-inner">
                    <h1><span>2000</span> sq. ft.</h1>
                    <p>The bare, expansive walls serve as the ideal canvas for film or photography. With all this space
                        in the bustling cultural and entrepreneurial locale of the Delhi-Gurgaon border, </p>
                </div>
            </div>
        </div>
        <div class="main-gate">
            <img src="{{ url('/') }}/images/gate1.svg">
        </div>
        <div class="gate-read-more">
            <p>Ekko is packed with the potential needed to host both indoor and outdoor events.</p>
            <p><a href="javascript:;">VIEW MORE</a></p>
        </div>
    </section>

    <section class="something-setion">
        <div class="wrapper">
            <div class="something-setion-inner">
                <h3><span>SOMETHING</span> FOR EVERYONE</h3>
                <h3>SOMETHING <span>FOR</span> EVERYONE</h3>
                <h3>SOMETHING FOR <span>EVERYONE</span></h3>
            </div>

            <div class="something-setion2-main">
                <div class="something-setion2-inner">
                    <div class="something-setion2-inner-th">
                        <img src="{{ url('/') }}/images/somthing1.svg">
                    </div>
                    <div class="something-setion2-inner-content">
                        <div class="something-setion2-inner-left">01</div>
                        <div class="something-setion2-inner-right">A <span>2000 sq.ft.</span> large studio space, with
                            collapsible partitions.</div>
                    </div>
                </div>
                <div class="something-setion2-inner">
                    <div class="something-setion2-inner-th">
                        <img src="{{ url('/') }}/images/somthing2.svg">
                    </div>
                    <div class="something-setion2-inner-content">
                        <div class="something-setion2-inner-left">02</div>
                        <div class="something-setion2-inner-right"><span>Lush lawn</span> area with natural grass cover.
                        </div>
                    </div>
                </div>

                <div class="something-setion2-inner">
                    <div class="something-setion2-inner-th">
                        <img src="{{ url('/') }}/images/somthing3.svg">
                    </div>
                    <div class="something-setion2-inner-content">
                        <div class="something-setion2-inner-left">03</div>
                        <div class="something-setion2-inner-right"><span>Connectivity</span> through Mehrauli-Gurgaon
                            road and Arjan Garh, Delhi metro station.</div>
                    </div>
                </div>


                <div class="something-setion2-inner">
                    <div class="something-setion2-inner-th">
                        <img src="{{ url('/') }}/images/somthing4.svg">
                    </div>
                    <div class="something-setion2-inner-content">
                        <div class="something-setion2-inner-left">04</div>
                        <div class="something-setion2-inner-right">Natural, ambient, spot and flood
                            <span>lighting</span>.</div>
                    </div>
                </div>


                <div class="something-setion2-inner">
                    <div class="something-setion2-inner-th">
                        <img src="{{ url('/') }}/images/somthing5.svg">
                    </div>
                    <div class="something-setion2-inner-content">
                        <div class="something-setion2-inner-left">05</div>
                        <div class="something-setion2-inner-right">Balanced <span>acoustics</span>, inbuilt speakers,
                            sound mixer and sound proofing.</div>
                    </div>
                </div>


                <div class="something-setion2-inner">
                    <div class="something-setion2-inner-th">
                        <img src="{{ url('/') }}/images/somthing6.svg">
                    </div>
                    <div class="something-setion2-inner-content">
                        <div class="something-setion2-inner-left">06</div>
                        <div class="something-setion2-inner-right"><span>WiFi</span> network, ample power outlets and
                            extension cables.</div>
                    </div>
                </div>


                <div class="something-setion2-inner">
                    <div class="something-setion2-inner-th">
                        <img src="{{ url('/') }}/images/somthing7.svg">
                    </div>
                    <div class="something-setion2-inner-content">
                        <div class="something-setion2-inner-left">07</div>
                        <div class="something-setion2-inner-right"><span>Wheelchair accessibility </span> and safety for
                            all ages.</div>
                    </div>
                </div>


                <div class="something-setion2-inner">
                    <div class="something-setion2-inner-th">
                        <img src="{{ url('/') }}/images/somthing8.svg">
                    </div>
                    <div class="something-setion2-inner-content">
                        <div class="something-setion2-inner-left">08</div>
                        <div class="something-setion2-inner-right">A <span>dedicated support</span> crew with industry
                            knowledge.</div>
                    </div>
                </div>

                <div class="something-setion2-inner">
                    <div class="something-setion2-inner-th">
                        <img src="{{ url('/') }}/images/somthing9.svg">
                    </div>
                    <div class="something-setion2-inner-content">
                        <div class="something-setion2-inner-left">09</div>
                        <div class="something-setion2-inner-right">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.</div>
                    </div>
                </div>
            </div>



        </div>
    </section>
@endsection;