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
<!-- @php
use Razorpay\Api\Api;
$api_key = "rzp_test_T9UtxZ8dbDcv3K";
$api_secret = "F8saAdKU1R3YbSnOHcYQS2fb";
$api = new Api($api_key, $api_secret);
dump($api);
$link = $api->paymentLink->create(array('amount'=>500, 'currency'=>'INR', 'accept_partial'=>true,
'first_min_partial_amount'=>100, 'description' => 'For XYZ purpose', 'customer' => array('name'=>'Gaurav Kumar',
'email' => 'gaurav.kumar@example.com', 'contact'=>'+919999999999'),  'notify'=>array('sms'=>true, 'email'=>true) ,
'reminder_enable'=>true ,'notes'=>array('policy_name'=> 'Jeevan Bima'),'callback_url' => route('razorCallback'),
'callback_method'=>'get'));
dump($link);
dump($link->short_url);
@endphp -->
<script>var OrderExpires = {{strtotime($expires)}};</script>
   
@endsection

