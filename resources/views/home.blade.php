@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    <section id="home" class="ms-hero margin-b-50">
        <div class="ms-diamond-1"></div>
        <div class="ms-diamond-2"></div>
        <div class="ms-diamond-3"></div>
        <div class="ms-diamond-4"></div>
        <div class="ms-diamond-5"></div>
        <div class="ms-diamond-6"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-item static">
                    <div class="ms-hero-detail">
                        <h2 class="ms-hero-title title-right-overflow"><span>Hello, <br> I am<br> <span
                                    class="name">&nbsp; Ken Ossai</span></span>
                        </h2>
                        <p class="ms-hero-detail">Lorem Ipsum is simply
                            dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s</p>
                        <a href="#" class="ms-learn-more-right">
                            <span class="text">Download CV</span>
                        </a>
                    </div>
                    <div class="ms-hero-img">
                        <div class="ms-card" data-tilt>
                            <img src="{{ asset('assets') }}/img/hero/IMG_3216i.jpg" alt="vasantbhai">
                        </div>
                    </div>
                    <div class="ms-hero-name">
                        <h3><span>Fullstack
                             Developer | UI/UX Designer</span></h3>
                    </div>
                </div>
                <div class="art"></div>
            </div>
        </div>

    </section>
    <!-- Hero End -->
    <section class="ms-client padding-tb-80">
        <h2 class="d-none">Clients</h2>
        <div class="container">
            <div class="row">
                <div class="ms-client-outer">
                    <ul id="ms-client-slider">
                        <li class="ms-client-item" data-animation="zoomIn">
                            <div class="ms-client-img"><a href="#"><img alt="client" title="client"
                                        src="assets/img/clients/1-d.jpg"></a></div>
                        </li>
                        <li class="ms-client-item" data-animation="zoomIn">
                            <div class="ms-client-img"><a href="#"><img alt="client" title="client"
                                        src="assets/img/clients/2-d.jpg"></a></div>
                        </li>
                        <li class="ms-client-item" data-animation="zoomIn">
                            <div class="ms-client-img"><a href="#"><img alt="client" title="client"
                                        src="assets/img/clients/3-d.jpg"></a></div>
                        </li>
                        <li class="ms-client-item" data-animation="zoomIn">
                            <div class="ms-client-img"><a href="#"><img alt="client" title="client"
                                        src="assets/img/clients/4-d.jpg"></a></div>
                        </li>
                        <li class="ms-client-item" data-animation="zoomIn">
                            <div class="ms-client-img"><a href="#"><img alt="client" title="client"
                                        src="assets/img/clients/5-d.jpg"></a></div>
                        </li>
                        <li class="ms-client-item" data-animation="zoomIn">
                            <div class="ms-client-img"><a href="#"><img alt="client" title="client"
                                        src="assets/img/clients/6-d.jpg"></a></div>
                        </li>
                        <li class="ms-client-item" data-animation="zoomIn">
                            <div class="ms-client-img"><a href="#"><img alt="client" title="client"
                                        src="assets/img/clients/7-d.jpg"></a></div>
                        </li>
                        <li class="ms-client-item" data-animation="zoomIn">
                            <div class="ms-client-img"><a href="#"><img alt="client" title="client"
                                        src="assets/img/clients/8-d.jpg"></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
