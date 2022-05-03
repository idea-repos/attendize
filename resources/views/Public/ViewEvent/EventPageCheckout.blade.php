@extends('Public.ViewEvent.Layouts.EventPage')

@section('head')

@stop

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

@include('Public.ViewEvent.Partials.EventCreateOrderSection')

<script>var OrderExpires = {{strtotime($expires)}};</script>
   
@endsection

