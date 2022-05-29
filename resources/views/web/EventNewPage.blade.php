@extends('Public.ViewEvent.Layouts.EventPage')



@section('content')

<section class="home-banner attendize">
        <header>
            <div class="logo"><a href="javascript:;"><img src="{{ url('/') }}/images/logo-black.svg" alt="logo" /></a></div>
            <div class="trigger trigger-black"><a href="javascript:;">
                    <span></span>
                    <span></span>
                </a></div>
        </header>
</section>
<div class="event-spacer"></div>
<div class="event-details">
    <div class="inner-wrapper">
        <div class="bktoevent"><a href="{{route('events')}}"><img src="{{ url('/') }}/images/calander-arrow.svg">CALENDAR</a></div>
        <div class="event-details-hd">
            Rishab Rikhiram Sharma
            <span>{{$event->title}} </span>
            {{-- @dump($event->categories()->pluck('title')->toArray()) --}}
            <span>{{implode(',',$event->categories()->pluck('title')->toArray())}} </span>
        </div>
        <div class="event-details-date">
        {{ $event->startDateFormatted() }}<br>
        
                <span property="endDate" content="{{ $event->end_date->toIso8601String() }}">
                     @if($event->start_date->diffInDays($event->end_date) == 0)
                        {{ $event->end_date->format('H:i') }}
                     @else
                        {{ $event->endDateFormatted() }}
                     @endif
                </span>
                @lang("Public_ViewEvent.at")
                <span property="location" typeof="Place">
                    <b property="name">{{$event->venue_name}}</b>
                    <meta property="address" content="{{ urldecode($event->venue_name) }}">
                </span>
           
        </div>
        <!--div class="addtocalander"><a href="javascript:;">Add to calander</a></div-->
		<div title="Add to Calendar" class="addeventatc addtocalander">
			Add to Calendar
			<span class="start"> {{ $event->startDateFormatted() }}</span>
			<span class="end">05/07/2022 10:00 AM</span>
			<span class="timezone">timezone</span>
			<span class="title">{{$event->title}}</span>
			<span class="description">Description of the event</span>
			<span class="location">{{$event->venue_name}}</span>
		</div>
        <div class="event-details-banner">
            <img src="{{ url('/') }}/{{ $image_path }}" class="w100">
        </div>
        <div class="event-details-section">
            <h4 class="ev-sub">Brief intro of the event as<br> presented by the artist </h4>
            <div class="event-details-section1">
                <div class="event-details-section1-inner-left">
                {!! md_to_html($event->description) !!}
                </div>
                <div class="event-details-section1-inner-right">
                <div class="event-details-social-left">
                    <h5>SITAR FOR MENTAL HEALTH</h5>
                <p>Rishab Rikhiram Sharma, Sitar<br>
                    Lorem ipsum, Tabla</p>
                </div>
                <div class="event-details-social-right">
                  <ul>
                      <li><a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank"><img src="{{ url('/') }}/images/fb.png"></a></li>
                      <li><a href="http://www.twitter.com/share?url={{url()->current()}}" target="_blank"><img src="{{ url('/') }}/images/tw.png"></a></li>
                  </ul>
                </div>
                </div>

                <div class="buy-ticket">
				  <a href="javascript:;" class="showdtnew"><img src="{{ url('/') }}/images/buy-now.png"> BUY TICKET</a>
				  
				    </div>
					   </div>
					   
				<div class="my-details-ev-new">	   
                @include('Public.ViewEvent.Partials.EventTicketsSection')
                  </div>
              
         
		 
		


            <div class="youmayknow">
                <h4 class="ev-hd">YOU MAY ALSO LIKE,</h4>
                <div class="youmayknow-inner">
                    <div class="youmayknow1">
                        <div class="youmayknow-th">
                            <a href="javascript:;"><img src="{{ url('/') }}/images/ev1.png" class="w100"></a>
                        </div>
                        <h4>Title Name <br>
                            Event Name</h4>
                            <p>3 Dec-5 Dec, Tues<br>
                                3pm-5pm</p>
                    </div>
                    <div class="youmayknow1">
                        <div class="youmayknow-th">
                            <a href="javascript:;"><img src="{{ url('/') }}/images/ev1.png" class="w100"></a>
                        </div>
                        <h4>Title Name <br>
                            Event Name</h4>
                            <p>3 Dec-5 Dec, Tues<br>
                                3pm-5pm</p>
                    </div>
                    <div class="youmayknow1">
                        <div class="youmayknow-th">
                            <a href="javascript:;"><img src="{{ url('/') }}/images/ev1.png" class="w100"></a>
                        </div>
                        <h4>Title Name <br>
                            Event Name</h4>
                            <p>3 Dec-5 Dec, Tues<br>
                                3pm-5pm</p>
                    </div>
                </div>
            </div>
          

        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdn.addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
@endsection;


