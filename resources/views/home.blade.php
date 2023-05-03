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
@endsection
