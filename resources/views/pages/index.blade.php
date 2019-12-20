@extends('layouts.app')
@section('content')
<!--Banner section
================== -->
<div class="banner__wrapper container-fluid">
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-6">
                <h1>Real Estate Investment In The Cloud</h1>
                <p>We're making real estate investments opportunity accessible to anyone. With as low as &#8358;50,000.00, you can now co-invest in properties, monitor your portfolio all from your mobile phone.</p>
                <p><i class="fa fa-check-square"></i>&nbsp;&nbsp; You earn rental income for live</p>
                <p><i class="fa fa-check-square"></i>&nbsp;&nbsp; You earn money through capital gains of your investments</p>
                <br />
                <a href="/register" class="register__btn">Get Started &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-long-arrow-right arrow"></i></a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 d-none d-lg-block">
                <img src="{{ asset('/images/house.svg') }}" class="img-fluid" alt="Banner Image">
            </div>
        </div>
    </div>
</div>
<!--End of Banner section
===========================-->
<!--Features section
===========================-->
<div class="features container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center heading">
                <h2>Features That Makes Us Standout</h2>
                <p>The most convinient way to invest in real estate</p>
            </div>
        </div>
        <div class="features__wrapper">
            <div class="features__card">
                <i class="fa fa-money icon"></i>
                <h4>Liquid and Flexible</h4>
                <p>You can invest any amount of money on any verified project and you can also sell your units of ownerships if need be on the platform.</p>
            </div>
            <div class="features__card">
                <i class="fa fa-comments icon"></i>
                <h4>24/7 Support</h4>
                <p>Reach out to our top notch customer success team members who are always ready to respond to all your queries on the go.</p>
            </div>
            <div class="features__card">
                <i class="fa fa-key icon"></i>
                <h4>Optimum security</h4>
                <p>All properties on the platform are well vetted. Your investments are also insured by XYZ Secutities Ltd. Try us now!</p>
            </div>
        </div>
    </div>
</div>
<!--End of Features
=====================-->
<!--Monitor section
=====================-->
<div class="monitor__wrapper">
    {{-- <div class="side__contents">
        <img src="{{ asset('images/side.png') }}" class="side-img" alt="">
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-7 image__holder pb-5">
                <img src="{{ asset('images/dashboard.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-5 charge__contents">
                <h2>Be in charge today!</h2>
                <hr>
                <p>We're a 100% digital company and all our processes are seamless and paperless. You are able to carry out transaction on our platform with any device.</p>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <p><i class="fa fa-check-square-o icons"></i>&nbsp;&nbsp; We're provide you access to our vetted listed properties</p>
                    </div>
                    <div class="col-md-6">
                            <p><i class="fa fa-check-square-o icons"></i>&nbsp;&nbsp; You invest and be able to monitor your investments on the go</p>
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                            <p><i class="fa fa-check-square-o icons"></i>&nbsp;&nbsp; Sell your ownership to a fellow community member</p>
                        </div>
                        <div class="col-md-6">
                                <p><i class="fa fa-check-square-o icons"></i>&nbsp;&nbsp; You can cash out anytime you want to. Amazing!</p>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!--End of Monitor
====================-->
<!--Processes section
==========================-->
<div class="process__wrapper container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center intro">
                <h3>How it Works</h3>
                <p>You can find any property and become an investor in minutes</p>
            </div>
        </div>
        <div class="row pt-4 pb-3 process text-center">
            <div class="col-md-4">
                <h5><i class="fa fa-search icons"></i>&nbsp;&nbsp;&nbsp; Search Property</h5>
                <hr>
                <p>Browse through our list of vetted properties by verified developers, preview and select the one that suits your investment needs.</p>
            </div>
            <div class="col-md-4">
                <h5><i class="fa fa-money icons"></i>&nbsp;&nbsp;&nbsp; Buy Stakes</h5>
                <hr>
                <p>Subscribe to as many units of ownership as you want by making payments. A certificate of ownership will be made available to you in 24 hours. W accept payments through bank transfers and bitcoin.</p>
            </div>
            <div class="col-md-4">
                <h5><i class="fa fa-cubes icons"></i>&nbsp;&nbsp;&nbsp; Cash Out</h5>
                <hr>
                <p>You earn rental income for live and you can also sell your ownership units to another member of the community through our market place or cash out when properties has been sold.</p>
            </div>
        </div>
    </div>
</div>
<!--End of Process section
====================-->
<!--Security section
==================-->
<div class="security__wrapper container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4 pb-2">
                <img src="{{ asset('images/security.png') }}" class="img-fluid security" alt="">
            </div>
            <div class="col-md-4">
                <h3>Your investments are safe and secured</h3>
                <p>Security is key in all we do. Fundestate.ng uses high end security technologies to make sure that all our users are safe. Also, all investments are held and managed by our partners XYZ Securities Limited.</p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<!--End of Security section
================-->
@endsection