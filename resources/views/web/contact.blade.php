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
@endsection;

