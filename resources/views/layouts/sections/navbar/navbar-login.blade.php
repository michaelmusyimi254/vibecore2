@php
use Illuminate\Support\Facades\Route;
$currentRouteName = Route::currentRouteName();
@endphp

@section('vendor-script')
@vite(['resources/assets/vendor/js/dropdown-hover.js', 'resources/assets/vendor/js/mega-dropdown.js'])
@endsection

<!-- Navbar: Start -->
<nav class="layout-navbar shadow-none py-0">
  <div class="container">
    <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
      <!-- Menu logo wrapper: Start -->
      <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8 ms-0">
        <!-- Mobile menu toggle: Start-->
        <button class="navbar-toggler border-0 px-0 me-4" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="icon-base ti tabler-menu-2 icon-lg align-middle text-heading fw-medium"></i>
        </button>
        <!-- Mobile menu toggle: End-->
        <div class="app-brand-link">
          <span class="app-brand-logo demo">@include('_partials.macros')</span>
        </div>
      </div>
      <!-- Menu logo wrapper: End -->
      <!-- Menu wrapper: Start -->
      <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
        <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2"
          type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="icon-base ti tabler-x icon-lg"></i>
        </button>
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link fw-medium">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link fw-medium">Features</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link fw-medium">Team</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link fw-medium">FAQ</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link fw-medium">Contact us</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link fw-medium">Pages</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link fw-medium">Admin</a>
          </li>
        </ul>
      </div>
      <div class="landing-menu-overlay d-lg-none"></div>
      <!-- Menu wrapper: End -->
      <!-- Toolbar: Start -->
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        @if ($configData['hasCustomizer'] == true)
        <!-- Style Switcher -->
        <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-1">
          <a class="nav-link dropdown-toggle hide-arrow" id="nav-theme" href="javascript:void(0);"
            data-bs-toggle="dropdown">
            <i class="icon-base ti tabler-sun icon-lg theme-icon-active"></i>
            <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
            <li>
              <button type="button" class="dropdown-item align-items-center active" data-bs-theme-value="light"
                aria-pressed="false">
                <span><i class="icon-base ti tabler-sun icon-md me-3" data-icon="sun"></i>Light</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="dark"
                aria-pressed="true">
                <span><i class="icon-base ti tabler-moon-stars icon-md me-3" data-icon="moon-stars"></i>Dark</span>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item align-items-center" data-bs-theme-value="system"
                aria-pressed="false">
                <span><i class="icon-base ti tabler-device-desktop-analytics icon-md me-3"
                    data-icon="device-desktop-analytics"></i>System</span>
              </button>
            </li>
          </ul>
        </li>
        <!-- / Style Switcher-->
        @endif

        <!-- navbar button: Start -->
        <li class="nav-item dropdown me-2">
          <a class="btn btn-primary dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown">
            <span class="icon-base ti tabler-login scaleX-n1-rtl me-md-1"></span>
            <span class="d-none d-md-block">Login/Register</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ url('auth/login-cover') }}">Login</a></li>
            <li><a class="dropdown-item" href="{{ url('auth/register-cover') }}">Register</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ url('auth/forgot-password-cover') }}">Forgot Password</a></li>
          </ul>
        </li>
        <!-- navbar button: End -->
      </ul>
      <!-- Toolbar: End -->
    </div>
  </div>
</nav>
<!-- Navbar: End --> 