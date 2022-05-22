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

<div class="community-outer">
    <div class="wrapper">
        <div class="community-inner community-inner1">
            <div class="community-left">
                <img src="images/connect1-banner.png">
                <div class="scroll-down">
                   <span> SCROLL DOWN</span>
                </div>
            </div>
            <div class="community-right">
                <h1>Hey<span>{{auth('attendee')->user()->first_name}}</span> Welcome!</h1>
                <p>Here you can find the Event Details</p>

                <table>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>






<div class="community-outer">
    <div class="wrapper">
        <div class="community-inner">
            @dump($orders)
        </div>
    </div>
</div>
@endsection;
@section('scripts')
@endsection;

