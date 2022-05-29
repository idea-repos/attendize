@extends('web.template')

@section('content')
<style>#footer{display:none !important;}
</style>
<section class="home-banner">
        <header>
            <div class="logo"><a href="javascript:;"><img src="{{ url('/') }}/images/logo-black.svg" alt="logo" /></a></div>
            <div class="trigger trigger-black"><a href="javascript:;">
                    <span></span>
                    <span></span>
                </a></div>
        </header>
</section>

<div class="event-spacer"></div>

<div id="cdlr">
    <div class="wrap">
	<div class="mobile-page-hd">
        <h1>EVENT CALENDAR</h1>
      </div>
        <div class="block bg-gray">
          <div class="inner">
            <div id="mini-clndr">
              <script id="mini-clndr-template" type="text/template">
                <div class="controls">
                  <div class="clndr-previous-button">&lsaquo;</div><div class="month"><%= month %></div><div class="clndr-next-button">&rsaquo;</div>
                </div>
                <div class="days-container">
                  <div class="days">
                    <div class="headers">
                      <% _.each(daysOfTheWeek, function(day) { %><div class="day-header"><%= day %></div><% }); %>
                    </div>
                    <% _.each(days, function(day) { %><div class="<%= day.classes %>" id="<%= day.id %>"><%= day.day %></div><% }); %>
                  </div>
                  <div class="events">
                    <div class="headers">
                      <!-- <div class="x-button">x</div> -->
                      <div class="event-header"><%= month %></div>
                    </div>
                    <div class="event-th"><img src="{{$data['image'] }}" class="w100"></div>
                    <div class="events-list">
                      <% _.each(eventsThisMonth, function(event) { %>
                        <div class="event">
                          <div class="ev-rep"><h2> <a href="<%= event.event_url %>"><%= event.title %></a></h2><span><%= moment(event.date).format('MMMM Do') %></span></div>
                        </div>
                      <% }); %>
                    </div>
                  </div>
                </div>
              </script>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="inthn">
    <div class="inner-wrapper">
        <div class="inthen_hd">
            <h4>IN THE NEWS</h4>
            <span></span>
            <span></span>
        </div>
        <div class="news-ev">
            @php
                $news = \App\Models\News::all();
            @endphp
            
            @if ($news)
                @foreach ($news as $single)
                    <div class="new-ev-inner">
                        <h4>{{$single->title}}</h4>
                        <p>{{$single->descrption}}...<a href="{{$single->url}}">Read More</a></p>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</div>
<div class="ev-footer-menu">
    <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="event-details.html">CALENDER</a></li>
        <li><a href="contact.html">CONNECT</a></li>
    </ul>
</div>
<div class="ev-footer">
    <div class="inner-wrapper">
    <div class="copyright">
        <div class="copy-right1">
            <!-- <i class="fa fa-copyright" aria-hidden="true"></i> 2022 Studio Ekko -->
            <img src="{{ url('/') }}/images/cw2.svg">
        </div>
        <div class="copy-right3">
            <!-- made with <img src="images/heart.png" /> By studio Snow Show -->
            <img src="{{ url('/') }}/images/cw1.svg">
        </div>
    </div>
</div>
</div>
<footer class="evt-footer">
  <div class="wrapper">
    <div class="footer-top-outer">
        <div class="footer-top">
            <div class="footer-top-left w40">
                <div class="subscribe">
                    <h4>Sign up for updates</h4>
                    <div class="subscribe-form">
                        <div class="inputfield">
                            <input type="text" name="subscribe" placeholder="TYPE YOUR EMAIL HERE">
                        </div>
                        <div class="submitbtn">
                            <button type="submit"><img src="{{ url('/') }}/images/submit-btn1.png"></button>
                        </div>
                    </div>
                </div>
                <div class="address desktop-only">
                    <div class="address-left">
                        Global Avenue 2,Mehrauli-<br />Gurgaon Rd, Aya Nagar,<br /> New Delhi, Delhi 110047
                    </div>
                    <div class="address-right">
                        <a href="javascript:;"><img src="{{ url('/') }}/images/address-link.png"></a>
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

                <div class="address mobile-only">
                    <div class="address-left">
                        Global Avenue 2,Mehrauli-<br />Gurgaon Rd, Aya Nagar,<br /> New Delhi, Delhi 110047
                    </div>
                    <div class="address-right">
                        <a href="javascript:;"><img src="{{ url('/') }}/images/address-link.png"></a>
                    </div>
                </div> 


            </div>
        </div>
        <div class="copy-right2 mobile-only">
            <ul>
                <li><a href="javascript:;">INSTAGRAM</a></li>
                <li><a href="javascript:;">FACEBOOK</a></li>
                <li><a href="javascript:;">LINKEDIN</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <div class="copy-right1">
            <!-- <i class="fa fa-copyright" aria-hidden="true"></i> 2022 Studio Ekko -->
            <img src="images/cb1.svg">
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


@endsection;
@section('scripts')
<script>
  $( function() {
  list ="{{ $data['listEvent'] }}";
  eventdata=list.replace(/&quot;/g,'"');
 // events=JSON.parse(events).replace(/"(\w+)"\s*:/g, '$1:');
  
  MYevents = JSON.parse(eventdata);
  //console.log(typeof events);
 
  
 var events = []
  //console.log(events);
 // var events = $.parseJSON(eventdata.replace(/&quot;/g,'"')) ;
 var clndr = {};



  // PARDON ME while I do a little magic to keep these events relevant for the rest of time...
  var currentMonth = moment().format('YYYY-MM');
  var nextMonth    = moment().add('month', 1).format('YYYY-MM');

  
  /*var events = [
    { date: '2022-05-22 12:34', title: 'Persian Kitten Auction', location: 'Center for Beautiful Cats' },
    { date: currentMonth + '-' + '19', title: 'Cat Frisbee', location: 'Jefferson Park' },
    { date: currentMonth + '-' + '23', title: 'Kitten Demonstration', location: 'Center for Beautiful Cats' },
    { date: nextMonth + '-' + '07',    title: 'Small Cat Photo Session', location: 'Center for Cat Photography' }
  ];*/
  

  // clndr = $('#full-clndr').clndr({
  //   template: $('#full-clndr-template').html(),
  //   events: events,
  //   forceSixRows: true
  // });
  console.log( MYevents);

  $('#mini-clndr').clndr({
    template: $('#mini-clndr-template').html(),
    events: MYevents,
    // clickEvents: {
    //   click: function(target) {
    //     if(target.events.length) {
    //       var daysContainer = $('#mini-clndr').find('.days-container');
    //       daysContainer.toggleClass('show-events', true);
    //       $('#mini-clndr').find('.x-button').click( function() {
    //         daysContainer.toggleClass('show-events', false);
    //       });
    //     }
    //   }
    // },
    adjacentDaysChangeMonth: true,
    forceSixRows: true
  });

  // $('#clndr-3').clndr({
  //   template: $('#clndr-3-template').html(),
  //   events: events,
  //   showAdjacentMonths: false
  // });

  // $('#clndr-4').clndr({
  //   template: $('#clndr-4-template').html(),
  //   events: events,
  //   lengthOfTime: {
  //     days: 7,
  //     interval: 7
  //   }
  // });
});
</script>
@endsection;

