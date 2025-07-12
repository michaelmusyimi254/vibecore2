@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Trainee Dashboard - VibeCore')

@section('vendor-style')
@vite([
'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
'resources/assets/vendor/libs/swiper/swiper.scss',
'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
'resources/assets/vendor/fonts/flag-icons.scss'
])
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/cards-advance.scss')
@endsection

@section('vendor-script')
@vite([
'resources/assets/vendor/libs/apex-charts/apexcharts.js',
'resources/assets/vendor/libs/swiper/swiper.js',
'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'
])
@endsection

@section('page-script')
@vite('resources/assets/js/dashboards-analytics.js')
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Trainee /</span> Dashboard
</h4>

<div class="row g-4 mb-4">
  <!-- Welcome Card -->
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="avatar avatar-md me-3">
            <span class="avatar-initial rounded bg-label-primary">
              <i class="fas fa-user"></i>
            </span>
          </div>
          <div>
            <h5 class="mb-1">Welcome back, {{ auth()->user()->name }}! 👋</h5>
            <p class="mb-0 text-muted">Ready for your next workout session?</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Stats Cards -->
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="fw-semibold d-block mb-1">Total Workouts</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">24</h4>
              <small class="text-success">(+12%)</small>
            </div>
            <small class="text-muted">This month</small>
          </div>
          <span class="badge bg-label-primary rounded p-2">
            <i class="fas fa-dumbbell fa-lg"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="fw-semibold d-block mb-1">Active Sessions</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">3</h4>
              <small class="text-success">(+2)</small>
            </div>
            <small class="text-muted">Booked this week</small>
          </div>
          <span class="badge bg-label-success rounded p-2">
            <i class="fas fa-calendar-check fa-lg"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="fw-semibold d-block mb-1">Progress Score</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">85%</h4>
              <small class="text-success">(+5%)</small>
            </div>
            <small class="text-muted">Overall fitness</small>
          </div>
          <span class="badge bg-label-warning rounded p-2">
            <i class="fas fa-chart-line fa-lg"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="fw-semibold d-block mb-1">Points Earned</span>
            <div class="d-flex align-items-end mt-2">
              <h4 class="mb-0 me-2">1,250</h4>
              <small class="text-success">(+150)</small>
            </div>
            <small class="text-muted">This month</small>
          </div>
          <span class="badge bg-label-info rounded p-2">
            <i class="fas fa-star fa-lg"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row g-4 mb-4">
  <!-- Upcoming Sessions -->
  <div class="col-lg-8">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Upcoming Sessions</h5>
        <a href="{{ route('trainee.schedule') }}" class="btn btn-sm btn-primary">View All</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th>Trainer</th>
                <th>Session Type</th>
                <th>Date & Time</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm me-3">
                      <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <div>
                      <h6 class="mb-0">John Trainer</h6>
                      <small class="text-muted">Personal Trainer</small>
                    </div>
                  </div>
                </td>
                <td><span class="badge bg-label-primary">Strength Training</span></td>
                <td>Today, 2:00 PM</td>
                <td><span class="badge bg-label-success">Confirmed</span></td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-sm btn-icon" data-bs-toggle="dropdown">
                      <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Details</a></li>
                      <li><a class="dropdown-item" href="#"><i class="fas fa-calendar me-2"></i>Reschedule</a></li>
                      <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-times me-2"></i>Cancel</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm me-3">
                      <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle">
                    </div>
                    <div>
                      <h6 class="mb-0">Sarah Coach</h6>
                      <small class="text-muted">Yoga Instructor</small>
                    </div>
                  </div>
                </td>
                <td><span class="badge bg-label-warning">Yoga Session</span></td>
                <td>Tomorrow, 9:00 AM</td>
                <td><span class="badge bg-label-warning">Pending</span></td>
                <td>
                  <div class="dropdown">
                    <button class="btn btn-sm btn-icon" data-bs-toggle="dropdown">
                      <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>View Details</a></li>
                      <li><a class="dropdown-item" href="#"><i class="fas fa-calendar me-2"></i>Reschedule</a></li>
                      <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-times me-2"></i>Cancel</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Quick Actions -->
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Quick Actions</h5>
      </div>
      <div class="card-body">
        <div class="d-grid gap-2">
          <a href="{{ route('trainee.bookings') }}" class="btn btn-primary">
            <i class="fas fa-calendar-plus me-2"></i>Book New Session
          </a>
          <a href="{{ route('trainee.messages') }}" class="btn btn-outline-primary">
            <i class="fas fa-envelope me-2"></i>Message Trainers
          </a>
          <a href="{{ route('trainee.community') }}" class="btn btn-outline-success">
            <i class="fas fa-users me-2"></i>Join Community
          </a>
          <a href="{{ route('trainee.profile') }}" class="btn btn-outline-info">
            <i class="fas fa-user-edit me-2"></i>Update Profile
          </a>
        </div>
      </div>
    </div>

    <!-- Recent Activity -->
    <div class="card mt-4">
      <div class="card-header">
        <h5 class="card-title mb-0">Recent Activity</h5>
      </div>
      <div class="card-body">
        <div class="timeline-vertical">
          <div class="timeline-item">
            <div class="timeline-marker bg-success"></div>
            <div class="timeline-content">
              <h6 class="mb-1">Workout Completed</h6>
              <p class="mb-0 text-muted">Strength training session with John Trainer</p>
              <small class="text-muted">2 hours ago</small>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-marker bg-primary"></div>
            <div class="timeline-content">
              <h6 class="mb-1">Session Booked</h6>
              <p class="mb-0 text-muted">Yoga session with Sarah Coach</p>
              <small class="text-muted">1 day ago</small>
            </div>
          </div>
          <div class="timeline-item">
            <div class="timeline-marker bg-warning"></div>
            <div class="timeline-content">
              <h6 class="mb-1">Goal Achieved</h6>
              <p class="mb-0 text-muted">Reached 10 workouts this month</p>
              <small class="text-muted">3 days ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 