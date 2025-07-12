@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutLogin')

@section('title', 'Register Cover - Pages')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/@form-validation/form-validation.scss'])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/@form-validation/popular.js',
'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
'resources/assets/vendor/libs/@form-validation/auto-focus.js'])
@endsection

@section('page-script')
@vite(['resources/assets/js/pages-auth.js'])
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">
    <!-- /Left Text -->
    <div class="d-none d-xl-flex col-xl-8 p-0">
      <div class="auth-cover-bg d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/img/illustrations/auth-register-illustration-' . $configData['theme'] . '.png') }}"
          alt="auth-register-cover" class="my-5 auth-illustration"
          data-app-light-img="illustrations/auth-register-illustration-light.png"
          data-app-dark-img="illustrations/auth-register-illustration-dark.png" />
        <img src="{{ asset('assets/img/illustrations/bg-shape-image-' . $configData['theme'] . '.png') }}"
          alt="auth-register-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png"
          data-app-dark-img="illustrations/bg-shape-image-dark.png" />
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Register -->
    <div class="d-flex col-12 col-xl-4 align-items-center authentication-bg p-sm-12 p-6">
      <div class="w-px-400 mx-auto mt-12 pt-5">
        <h4 class="mb-1">Adventure starts here 🚀</h4>
        <p class="mb-6">Make your app management easy and fun!</p>

        <form id="formAuthentication" class="mb-6" action="{{ url('/') }}" method="GET">
          <div class="mb-6 form-control-validation">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"
              autofocus />
          </div>
          <div class="mb-6 form-control-validation">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
          </div>
          <div class="mb-6 form-password-toggle form-control-validation">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge">
              <input type="password" id="password" class="form-control" name="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
              <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
            </div>
          </div>
          
          <!-- Role Selection -->
          <div class="mb-6">
            <label class="form-label">Choose Your Role</label>
            <div class="row g-3">
              <div class="col-6">
                <div class="form-check custom-option custom-option-icon">
                  <input class="form-check-input" type="radio" name="role" id="role-trainee" value="trainee" />
                  <label class="form-check-label custom-option-content" for="role-trainee">
                    <span class="custom-option-body">
                      <i class="icon-base ti tabler-user text-primary mb-2" style="font-size: 2rem;"></i>
                      <span class="custom-option-title">Trainee</span>
                      <small class="custom-option-text">Join as a student to learn and grow</small>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check custom-option custom-option-icon">
                  <input class="form-check-input" type="radio" name="role" id="role-trainer" value="trainer" />
                  <label class="form-check-label custom-option-content" for="role-trainer">
                    <span class="custom-option-body">
                      <i class="icon-base ti tabler-dumbbell text-success mb-2" style="font-size: 2rem;"></i>
                      <span class="custom-option-title">Trainer</span>
                      <small class="custom-option-text">Share your expertise and teach others</small>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check custom-option custom-option-icon">
                  <input class="form-check-input" type="radio" name="role" id="role-facility" value="facility" />
                  <label class="form-check-label custom-option-content" for="role-facility">
                    <span class="custom-option-body">
                      <i class="icon-base ti tabler-building text-info mb-2" style="font-size: 2rem;"></i>
                      <span class="custom-option-title">Facility</span>
                      <small class="custom-option-text">Manage your fitness center or gym</small>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check custom-option custom-option-icon">
                  <input class="form-check-input" type="radio" name="role" id="role-vendor" value="vendor" />
                  <label class="form-check-label custom-option-content" for="role-vendor">
                    <span class="custom-option-body">
                      <i class="icon-base ti tabler-shopping-cart text-warning mb-2" style="font-size: 2rem;"></i>
                      <span class="custom-option-title">Vendor</span>
                      <small class="custom-option-text">Sell fitness products and services</small>
                    </span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-6 mt-8">
            <div class="form-check mb-8 ms-2 form-control-validation">
              <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
              <label class="form-check-label" for="terms-conditions">
                I agree to
                <a href="javascript:void(0);">privacy policy & terms</a>
              </label>
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100">Sign up</button>
        </form>

        <p class="text-center">
          <span>Already have an account?</span>
          <a href="{{ url('auth/login-cover') }}">
            <span>Sign in instead</span>
          </a>
        </p>

        <div class="divider my-6">
          <div class="divider-text">or</div>
        </div>

        <div class="d-flex justify-content-center">
          <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-facebook me-1_5">
            <i class="icon-base ti tabler-brand-facebook-filled icon-20px"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-twitter me-1_5">
            <i class="icon-base ti tabler-brand-twitter-filled icon-20px"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-github me-1_5">
            <i class="icon-base ti tabler-brand-github-filled icon-20px"></i>
          </a>

          <a href="javascript:;" class="btn btn-icon rounded-circle btn-text-google-plus">
            <i class="icon-base ti tabler-brand-google-filled icon-20px"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
@endsection