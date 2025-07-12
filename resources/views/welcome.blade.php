@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutFront')

@section('title', 'VibeCore - Your Complete Fitness & Wellness Platform')

<!-- Vendor Styles -->
@section('vendor-style')
@vite(['resources/assets/vendor/libs/nouislider/nouislider.scss', 'resources/assets/vendor/libs/swiper/swiper.scss'])
@endsection

<!-- Page Styles -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/front-page-landing.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite(['resources/assets/vendor/libs/nouislider/nouislider.js', 'resources/assets/vendor/libs/swiper/swiper.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/front-page-landing.js'])
@endsection

@section('content')
<div data-bs-spy="scroll" class="scrollspy-example">
  <!-- Hero: Start -->
  <section id="hero-animation">
    <div id="landingHero" class="section-py landing-hero position-relative">
      <img src="{{ asset('assets/img/front-pages/backgrounds/hero-bg.png') }}" alt="hero background"
        class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100" data-speed="1" />
      <div class="container">
        <div class="hero-text-box text-center position-relative">
          <h1 class="hero-title display-6 fw-extrabold text-white">Your Complete Fitness & Wellness Platform</h1>
          <h2 class="hero-sub-title h6 mb-6 text-white">
            Connect with trainers, discover facilities, join events, and shop for fitness gear<br class="d-none d-lg-block" />
            all in one place.
          </h2>
          
          <!-- Smart Search Component -->
          <div class="hero-search-section mb-6">
            @include('components.smart-search')
          </div>
          
          <div class="landing-hero-btn d-inline-block position-relative">
            <span class="hero-btn-item position-absolute d-none d-md-flex fw-medium text-white">Join community <img
                src="{{ asset('assets/img/front-pages/icons/Join-community-arrow.png') }}" alt="Join community arrow"
                class="scaleX-n1-rtl" /></span>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Get Started</a>
          </div>
        </div>
        <div id="heroDashboardAnimation" class="hero-animation-img">
          <a href="{{ route('dashboard') }}" target="_blank">
            <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
              <img
                src="{{ asset('assets/img/front-pages/landing-page/hero-dashboard-' . $configData['theme'] . '.png') }}"
                alt="hero dashboard" class="animation-img"
                data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
              <img
                src="{{ asset('assets/img/front-pages/landing-page/hero-elements-' . $configData['theme'] . '.png') }}"
                alt="hero elements" class="position-absolute hero-elements-img animation-img top-0 start-0"
                data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="landing-hero-blank"></div>
  </section>
  <!-- Hero: End -->

  <!-- Useful features: Start -->
  <section id="landingFeatures" class="section-py landing-features">
    <div class="container">
      <div class="text-center mb-4">
        <span class="badge bg-label-primary">Platform Features</span>
      </div>
      <h4 class="text-center mb-1">
        <span class="position-relative fw-extrabold z-1">Everything you need
          <img src="{{ asset('assets/img/front-pages/icons/section-title-icon.png') }}" alt="laptop charging"
            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
        </span>
        for your fitness journey
      </h4>
      <p class="text-center mb-12">A comprehensive platform that connects fitness enthusiasts with trainers, facilities, and products.
      </p>
      <div class="features-icon-wrapper row gx-0 gy-6 g-sm-12">
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="mb-4 text-primary text-center">
            <i class="fas fa-dumbbell fa-3x"></i>
          </div>
          <h5 class="mb-2">Find Facilities</h5>
          <p class="features-icon-description">Discover gyms, swimming pools, boxing clubs, yoga studios, and more in your area.</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="mb-4 text-primary text-center">
            <i class="fas fa-user-tie fa-3x"></i>
          </div>
          <h5 class="mb-2">Connect with Trainers</h5>
          <p class="features-icon-description">Book sessions with certified trainers specializing in fitness, swimming, boxing, dance, and more.</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="text-center mb-4 text-primary">
            <i class="fas fa-calendar-alt fa-3x"></i>
          </div>
          <h5 class="mb-2">Join Events</h5>
          <p class="features-icon-description">Participate in bootcamps, workshops, competitions, and wellness retreats.</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="text-center mb-4 text-primary">
            <i class="fas fa-shopping-cart fa-3x"></i>
          </div>
          <h5 class="mb-2">Shop Fitness Gear</h5>
          <p class="features-icon-description">Browse and purchase equipment, supplements, apparel, and fitness accessories.</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="text-center mb-4 text-primary">
            <i class="fas fa-users fa-3x"></i>
          </div>
          <h5 class="mb-2">Community</h5>
          <p class="features-icon-description">Connect with like-minded fitness enthusiasts and share your journey.</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
          <div class="text-center mb-4 text-primary">
            <i class="fas fa-mobile-alt fa-3x"></i>
          </div>
          <h5 class="mb-2">Mobile Ready</h5>
          <p class="features-icon-description">Access VibeCore on any device with our responsive platform.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Useful features: End -->

  <!-- Stats Section -->
  <section class="bg-light py-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-3">
          <div class="mb-3">
            <h3 class="fw-bold text-primary">50+</h3>
            <p class="text-muted mb-0">Facilities</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="mb-3">
            <h3 class="fw-bold text-success">100+</h3>
            <p class="text-muted mb-0">Trainers</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="mb-3">
            <h3 class="fw-bold text-warning">500+</h3>
            <p class="text-muted mb-0">Products</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="mb-3">
            <h3 class="fw-bold text-info">1000+</h3>
            <p class="text-muted mb-0">Users</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-primary text-white py-5">
    <div class="container text-center">
      <h3 class="mb-4">Ready to Start Your Fitness Journey?</h3>
      <p class="lead mb-4">Join thousands of users who have transformed their lives with VibeCore.</p>
      <a href="{{ route('register') }}" class="btn btn-light btn-lg">
        <i class="fas fa-rocket me-2"></i>Join Now
      </a>
    </div>
  </section>
</div>
@endsection 