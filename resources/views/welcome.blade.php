@extends('layouts.layoutFront')

@section('title', 'VibeCore - Your Complete Fitness & Wellness Platform')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/aos/aos.scss'])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/front-pages.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/aos/aos.js'])
@endsection

@section('page-script')
@vite(['resources/assets/js/front-pages-landing.js'])
@endsection

@section('content')
<!-- Hero Section -->
<section class="hero-section bg-primary text-white py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h1 class="display-4 fw-bold mb-4">Your Complete Fitness & Wellness Platform</h1>
        <p class="lead mb-5">Connect with trainers, discover facilities, join events, and shop for fitness gear all in one place.</p>
        <div class="d-flex gap-3">
          <a href="{{ route('register') }}" class="btn btn-light btn-lg">
            <i class="fas fa-user-plus me-2"></i>Get Started
          </a>
          <a href="#features" class="btn btn-outline-light btn-lg">
            <i class="fas fa-info-circle me-2"></i>Learn More
          </a>
        </div>
      </div>
      <div class="col-lg-6 text-center">
        <img src="{{ asset('assets/img/front-pages/backgrounds/hero-bg.png') }}" alt="VibeCore Hero" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">What VibeCore Offers</h2>
      <p class="text-muted">Everything you need for your fitness journey in one platform</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="avatar avatar-lg bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
              <i class="fas fa-dumbbell text-white fa-2x"></i>
            </div>
            <h5 class="card-title">Find Facilities</h5>
            <p class="card-text text-muted">Discover gyms, swimming pools, boxing clubs, yoga studios, and more in your area.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="avatar avatar-lg bg-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
              <i class="fas fa-user-tie text-white fa-2x"></i>
            </div>
            <h5 class="card-title">Connect with Trainers</h5>
            <p class="card-text text-muted">Book sessions with certified trainers specializing in fitness, swimming, boxing, dance, and more.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="avatar avatar-lg bg-warning rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
              <i class="fas fa-calendar-alt text-white fa-2x"></i>
            </div>
            <h5 class="card-title">Join Events</h5>
            <p class="card-text text-muted">Participate in bootcamps, workshops, competitions, and wellness retreats.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="avatar avatar-lg bg-info rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
              <i class="fas fa-shopping-cart text-white fa-2x"></i>
            </div>
            <h5 class="card-title">Shop Fitness Gear</h5>
            <p class="card-text text-muted">Browse and purchase equipment, supplements, apparel, and fitness accessories.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="avatar avatar-lg bg-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
              <i class="fas fa-users text-white fa-2x"></i>
            </div>
            <h5 class="card-title">Community</h5>
            <p class="card-text text-muted">Connect with like-minded fitness enthusiasts and share your journey.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body text-center p-4">
            <div class="avatar avatar-lg bg-secondary rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
              <i class="fas fa-mobile-alt text-white fa-2x"></i>
            </div>
            <h5 class="card-title">Mobile Ready</h5>
            <p class="card-text text-muted">Access VibeCore on any device with our responsive platform.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
@endsection 