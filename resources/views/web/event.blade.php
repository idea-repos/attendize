@extends('web.template')

@section('content')

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
            <div class="new-ev-inner">
                <h4>TIMES OF INDIA</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem neque, pretium eu risus. Porttitor dignissim sollicitudin vitae nibh scelerisque maecenas sem consectetur.</p>
            </div>
            <div class="new-ev-inner">
                <h4>TIMES OF INDIA</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem neque, pretium eu risus. Porttitor dignissim sollicitudin vitae nibh scelerisque maecenas sem consectetur.</p>
            </div>
            <div class="new-ev-inner">
                <h4>TIMES OF INDIA</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem neque, pretium eu risus. Porttitor dignissim sollicitudin vitae nibh scelerisque maecenas sem consectetur.</p>
            </div>
        </div>
    </div>
</div>
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

