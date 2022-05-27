@extends('web.template')

@section('content')
<style>
body{
	background:#fff !important;
}
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


<div class="community-outer">
    <div class="wrapper">
        <div class="community-inner community-inner1">
            <div class="community-left">
                <img src="{{ url('/') }}/images/connect1-banner.png">
                <div class="scroll-down">
                   <span> SCROLL DOWN</span>
                </div>
            </div>
            <div class="community-right">
                <h1><span>Join</span> the<br> community!</h1>
                <p>Reach out if you want to collaborate with us, or simply have a chat.</p>
                <form>
                    <div class="community-form">
                    <div class="form_field">
                        <div class="main_form_field">
                            <input type="text" nmae="fname" placeholder="NAME">
                        </div>
                        <div class="main_form_field">
                            <input type="email" nmae="fname" placeholder="EMAIL">
                        </div>
                        <div class="main_form_field">
                            <input type="tel" nmae="fname" placeholder="PHONE">
                        </div>
                    </div>
                    <div class="form_field">
                        <h4>MESSAGE</h4>
                        <div class="main_form_field main_form_field_teaxtarea">
                        <textarea></textarea>
                        </div>
                        <div class="form-field-submit">
                            <button type="submit"><img src="{{ url('/') }}/images/submit-form.png"></button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="community-outer">
    <div class="wrapper">
        <div class="community-inner">
            <div class="community-left">
                <img src="{{ url('/') }}/images/Union.png">
                <div class="scroll-down">
                   <span> SCROLL DOWN</span>
                </div>
            </div>
            <div class="community-right">
                <h1><span>Run</span> the<br> community!</h1>
                <p>We’re looking for fresh graduates, interns, volunteers and <br> enthusiasts to join our growing team. For full details, check<br> out our job post <strong>here</strong> or write to us at <strong>info@studioekko.com</strong></p>
                

                <div class="community-contact">
                    <div class="community-contact1"><a href="mailto:info@studioekko.com"><span class="sin">info@studioekko.com</span>
                        <img src="{{ url('/') }}/images/link-arrow.png">
                    </a></div>
                    <div class="community-contact1"><a href="https://wa.me/+919149087149?text=I'm%20interested%20"><span class="sin">+91 91490 87149</span>  <img src="{{ url('/') }}/images/link-arrow.png"></a>
                    <span class="what">WHATSAPP</span></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection;
@section('scripts')
@endsection;

