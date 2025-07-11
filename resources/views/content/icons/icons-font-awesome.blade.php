@extends('layouts/layoutMaster')

@section('title', 'Font Awesome - Icons"')

@section('page-style')
  @vite(['resources/assets/vendor/fonts/fontawesome.scss', 'resources/assets/vendor/scss/pages/page-icons.scss'])
@endsection

@section('content')
  <p class="ms-3">
    You can check complete list of Font Awesome icons from
    <a href="https://fontawesome.com/" target="_blank">https://fontawesome.com</a>
  </p>

  <!-- Icons Container -->
  <div class="d-flex flex-wrap" id="icons-container">
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-500px mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">500px</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-accessible-icon mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">accessible-icon</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-accusoft mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">accusoft</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fas fa-anchor mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">anchor</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base far fa-address-book mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">address-book</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base far fa-address-card mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">address-card</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fas fa-adjust mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">adjust</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-adn mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">adn</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-angular mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">angular</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-adversal mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">adversal</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-affiliatetheme mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">affiliatetheme</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fas fa-air-freshener mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">air-freshener</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-airbnb mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">airbnb</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-algolia mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">algolia</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-alipay mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">alipay</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fas fa-allergies mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">allergies</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-amazon mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">amazon</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-amazon-pay mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">amazon-pay</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fas fa-ambulance mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">ambulance</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fas fa-american-sign-language-interpreting mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">american-sign-language-interpreting</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-android mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">android</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fab fa-angellist mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">angellist</p>
      </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-6 mx-3">
      <div class="card-body">
        <i class="icon-base fas fa-angle-double-down mb-2"></i>
        <p class="icon-name text-capitalize text-truncate mb-0">angle-double-down</p>
      </div>
    </div>
  </div>

  <!-- Buttons -->
  <div class="d-flex justify-content-center mx-auto gap-4">
    <a href="https://fontawesome.com/" target="_blank" class="btn btn-primary">View All Icons</a>
    <a href="{{ config('variables.documentation') }}/Icons.html" class="btn btn-primary" target="_blank">How to use
      icons?</a>
  </div>
@endsection
