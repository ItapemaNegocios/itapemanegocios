@extends('front.master.main')

@section('master')
    <style>
        body {
            background-color: #f7f7f7;
        }

        .header.fixed {
            background-color: #172434;
        }

        .fullscreen-section {
            margin-top: 170px;
        }
    </style>

    <div class="page-title" style="background-image: url('{{ asset('assets/images/background.png') }}');">
        <div class="inner">
            <h2>Cadastre sua empresa</h2>
            <p>Aliquam ultrices iaculis auctor.</p>
        </div>
    </div>
    <div class="section boxed-section light">
        <div class="inner">
            <div class="container">
                <div class="box transparent">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pricing-table" style="background-image: url('{{ asset('assets/images/pricing-table01.jpg') }}');">
                                <div class="inner">
                                    <div class="overlay">
                                        <h3>Basic <span>$9</span></h3>
                                        <p>Standard listing submission, active for 30 days.</p>
                                        <ul class="list-unstyled">
                                            <li><span>One</span> Listing</li>
                                            <li><span>30 Days</span> Availability</li>
                                            <li><span>Standard</span> Listing</li>
                                            <li><span>Limited</span> Support</li>
                                        </ul>
                                        <a href="" class="button white">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing-table popular" style="background-image: url('{{ asset('assets/images/pricing-table02.jpg') }}');">
                                <div class="inner">
                                    <div class="overlay">
                                        <p class="popular-label">Most Popular</p>
                                        <h3>Professional <span>$39</span></h3>
                                        <p>One Time Fee for one listing, highlighted in the search results.</p>
                                        <ul class="list-unstyled">
                                            <li><span>One</span> Listing</li>
                                            <li><span>30 Days</span> Availability</li>
                                            <li><span>Standard</span> Listing</li>
                                            <li><span>Limited</span> Support</li>
                                        </ul>
                                        <a href="" class="button">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing-table" style="background-image: url('{{ asset('assets/images/pricing-table03.jpg') }}');">
                                <div class="inner">
                                    <div class="overlay">
                                        <h3>Business <span>$79</span></h3>
                                        <p>Subscription Based for unlimited listings and availability.</p>
                                        <ul class="list-unstyled">
                                            <li><span>Unlimited</span> Listings</li>
                                            <li><span>Unlimited</span> Availability</li>
                                            <li><span>Featured</span> In the Results</li>
                                            <li><span>24/7 Priority</span> Support</li>
                                        </ul>
                                        <a href="" class="button white">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon01.png') }}" alt="icon">
                                <div class="content">
                                    <h3>100% Money Back Guarantee</h3>
                                    <p>You have 14 days of test driving and if you’re unhappy with it, for any reason, just drop us an email and we’ll take care of you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon02.png') }}" alt="icon">
                                <div class="content">
                                    <h3>Support Best In Business</h3>
                                    <p>We live by making our clients happy and if you had anything less than a great experience with this theme please contact us now.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection