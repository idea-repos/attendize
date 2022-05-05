@extends('Public.ViewEvent.Layouts.EventPage')

@section('head')

@stop

@section('content')

    @include('Public.ViewEvent.Partials.EventHeaderSection')
    <!-- @include('Public.ViewEvent.Partials.EventShareSection') -->
    @include('Public.ViewEvent.Partials.EventViewOrderSection')
    @include('Public.ViewEvent.Partials.EventFooterSection')
    
@stop
