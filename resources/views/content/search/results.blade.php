@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutFront')

@section('title', 'Search Results - VibeCore')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/nouislider/nouislider.scss'])
@endsection

@section('page-style')
@vite(['resources/assets/vendor/scss/pages/front-page-landing.scss'])
@endsection

@section('content')
<div class="container py-5">
  <!-- Search Header -->
  <div class="search-header mb-5">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h1 class="display-6 fw-bold mb-3">
          @if($query)
            Search Results for "{{ $query }}"
          @else
            Discover Fitness & Wellness
          @endif
        </h1>
        <p class="text-muted mb-0">
          @php
            $totalResults = $results['trainers']->count() + $results['facilities']->count() + 
                           $results['events']->count() + $results['products']->count();
          @endphp
          Found {{ $totalResults }} results
          @if($category)
            in {{ ucfirst($category) }}s
          @endif
        </p>
      </div>
      <div class="col-md-4 text-md-end">
        <a href="{{ url('/') }}" class="btn btn-outline-primary">
          <i class="icon-base ti tabler-arrow-left me-2"></i>Back to Search
        </a>
      </div>
    </div>
  </div>

  <!-- Search Filters -->
  <div class="search-filters-section mb-5">
    <div class="card">
      <div class="card-body">
        <form method="GET" action="{{ route('search.results') }}" class="row g-3">
          <div class="col-md-4">
            <input type="text" name="query" class="form-control" placeholder="Search..." value="{{ $query }}">
          </div>
          <div class="col-md-2">
            <select name="category" class="form-select">
              <option value="">All Categories</option>
              <option value="trainer" {{ $category === 'trainer' ? 'selected' : '' }}>Trainers</option>
              <option value="facility" {{ $category === 'facility' ? 'selected' : '' }}>Facilities</option>
              <option value="event" {{ $category === 'event' ? 'selected' : '' }}>Events</option>
            </select>
          </div>
          <div class="col-md-2">
            <select name="location" class="form-select">
              <option value="">Any Location</option>
              <option value="nearby" {{ $location === 'nearby' ? 'selected' : '' }}>Nearby</option>
              <option value="city" {{ $location === 'city' ? 'selected' : '' }}>Same City</option>
              <option value="region" {{ $location === 'region' ? 'selected' : '' }}>Same Region</option>
            </select>
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">
              <i class="icon-base ti tabler-search me-2"></i>Search
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Results Tabs -->
  <ul class="nav nav-tabs mb-4" id="resultsTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab">
        All ({{ $totalResults }})
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="trainers-tab" data-bs-toggle="tab" data-bs-target="#trainers" type="button" role="tab">
        Trainers ({{ $results['trainers']->count() }})
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="facilities-tab" data-bs-toggle="tab" data-bs-target="#facilities" type="button" role="tab">
        Facilities ({{ $results['facilities']->count() }})
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="events-tab" data-bs-toggle="tab" data-bs-target="#events" type="button" role="tab">
        Events ({{ $results['events']->count() }})
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab">
        Products ({{ $results['products']->count() }})
      </button>
    </li>
  </ul>

  <!-- Results Content -->
  <div class="tab-content" id="resultsTabContent">
    <!-- All Results -->
    <div class="tab-pane fade show active" id="all" role="tabpanel">
      @if($totalResults > 0)
        <!-- Trainers Section -->
        @if($results['trainers']->count() > 0)
          <div class="results-section mb-5">
            <h3 class="mb-4">
              <i class="icon-base ti tabler-user text-primary me-2"></i>Trainers
            </h3>
            <div class="row g-4">
              @foreach($results['trainers'] as $trainer)
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <div class="avatar avatar-lg me-3">
                          <span class="avatar-initial rounded-circle bg-primary">
                            {{ substr($trainer->name, 0, 1) }}
                          </span>
                        </div>
                        <div>
                          <h5 class="card-title mb-1">{{ $trainer->name }}</h5>
                          <p class="text-muted mb-0">{{ $trainer->specialization }}</p>
                        </div>
                      </div>
                      <p class="card-text">{{ Str::limit($trainer->description, 100) }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-success">Available</span>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Profile</a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endif

        <!-- Facilities Section -->
        @if($results['facilities']->count() > 0)
          <div class="results-section mb-5">
            <h3 class="mb-4">
              <i class="icon-base ti tabler-building text-info me-2"></i>Facilities
            </h3>
            <div class="row g-4">
              @foreach($results['facilities'] as $facility)
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <div class="avatar avatar-lg me-3">
                          <span class="avatar-initial rounded-circle bg-info">
                            {{ substr($facility->name, 0, 1) }}
                          </span>
                        </div>
                        <div>
                          <h5 class="card-title mb-1">{{ $facility->name }}</h5>
                          <p class="text-muted mb-0">{{ $facility->type }}</p>
                        </div>
                      </div>
                      <p class="card-text">{{ Str::limit($facility->description, 100) }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-info">{{ $facility->type }}</span>
                        <a href="#" class="btn btn-sm btn-outline-info">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endif

        <!-- Events Section -->
        @if($results['events']->count() > 0)
          <div class="results-section mb-5">
            <h3 class="mb-4">
              <i class="icon-base ti tabler-calendar text-warning me-2"></i>Events
            </h3>
            <div class="row g-4">
              @foreach($results['events'] as $event)
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <div class="avatar avatar-lg me-3">
                          <span class="avatar-initial rounded-circle bg-warning">
                            {{ substr($event->title, 0, 1) }}
                          </span>
                        </div>
                        <div>
                          <h5 class="card-title mb-1">{{ $event->title }}</h5>
                          <p class="text-muted mb-0">{{ $event->type }}</p>
                        </div>
                      </div>
                      <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-warning">{{ $event->type }}</span>
                        <a href="#" class="btn btn-sm btn-outline-warning">Join Event</a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endif

        <!-- Products Section -->
        @if($results['products']->count() > 0)
          <div class="results-section mb-5">
            <h3 class="mb-4">
              <i class="icon-base ti tabler-shopping-cart text-danger me-2"></i>Products
            </h3>
            <div class="row g-4">
              @foreach($results['products'] as $product)
                <div class="col-lg-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-3">
                        <div class="avatar avatar-lg me-3">
                          <span class="avatar-initial rounded-circle bg-danger">
                            {{ substr($product->name, 0, 1) }}
                          </span>
                        </div>
                        <div>
                          <h5 class="card-title mb-1">{{ $product->name }}</h5>
                          <p class="text-muted mb-0">${{ number_format($product->price, 2) }}</p>
                        </div>
                      </div>
                      <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-danger">${{ number_format($product->price, 2) }}</span>
                        <a href="#" class="btn btn-sm btn-outline-danger">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endif
      @else
        <div class="text-center py-5">
          <i class="icon-base ti tabler-search-off text-muted" style="font-size: 4rem;"></i>
          <h3 class="mt-3">No results found</h3>
          <p class="text-muted">Try adjusting your search criteria or browse our categories.</p>
          <a href="{{ url('/') }}" class="btn btn-primary">Back to Search</a>
        </div>
      @endif
    </div>

    <!-- Individual Tab Panes -->
    <div class="tab-pane fade" id="trainers" role="tabpanel">
      @if($results['trainers']->count() > 0)
        <div class="row g-4">
          @foreach($results['trainers'] as $trainer)
            <div class="col-lg-4 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div class="avatar avatar-lg me-3">
                      <span class="avatar-initial rounded-circle bg-primary">
                        {{ substr($trainer->name, 0, 1) }}
                      </span>
                    </div>
                    <div>
                      <h5 class="card-title mb-1">{{ $trainer->name }}</h5>
                      <p class="text-muted mb-0">{{ $trainer->specialization }}</p>
                    </div>
                  </div>
                  <p class="card-text">{{ Str::limit($trainer->description, 100) }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="badge bg-success">Available</span>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Profile</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="text-center py-5">
          <p class="text-muted">No trainers found matching your criteria.</p>
        </div>
      @endif
    </div>

    <div class="tab-pane fade" id="facilities" role="tabpanel">
      @if($results['facilities']->count() > 0)
        <div class="row g-4">
          @foreach($results['facilities'] as $facility)
            <div class="col-lg-4 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div class="avatar avatar-lg me-3">
                      <span class="avatar-initial rounded-circle bg-info">
                        {{ substr($facility->name, 0, 1) }}
                      </span>
                    </div>
                    <div>
                      <h5 class="card-title mb-1">{{ $facility->name }}</h5>
                      <p class="text-muted mb-0">{{ $facility->type }}</p>
                    </div>
                  </div>
                  <p class="card-text">{{ Str::limit($facility->description, 100) }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="badge bg-info">{{ $facility->type }}</span>
                    <a href="#" class="btn btn-sm btn-outline-info">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="text-center py-5">
          <p class="text-muted">No facilities found matching your criteria.</p>
        </div>
      @endif
    </div>

    <div class="tab-pane fade" id="events" role="tabpanel">
      @if($results['events']->count() > 0)
        <div class="row g-4">
          @foreach($results['events'] as $event)
            <div class="col-lg-4 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div class="avatar avatar-lg me-3">
                      <span class="avatar-initial rounded-circle bg-warning">
                        {{ substr($event->title, 0, 1) }}
                      </span>
                    </div>
                    <div>
                      <h5 class="card-title mb-1">{{ $event->title }}</h5>
                      <p class="text-muted mb-0">{{ $event->type }}</p>
                    </div>
                  </div>
                  <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="badge bg-warning">{{ $event->type }}</span>
                    <a href="#" class="btn btn-sm btn-outline-warning">Join Event</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="text-center py-5">
          <p class="text-muted">No events found matching your criteria.</p>
        </div>
      @endif
    </div>

    <div class="tab-pane fade" id="products" role="tabpanel">
      @if($results['products']->count() > 0)
        <div class="row g-4">
          @foreach($results['products'] as $product)
            <div class="col-lg-4 col-md-6">
              <div class="card h-100">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-3">
                    <div class="avatar avatar-lg me-3">
                      <span class="avatar-initial rounded-circle bg-danger">
                        {{ substr($product->name, 0, 1) }}
                      </span>
                    </div>
                    <div>
                      <h5 class="card-title mb-1">{{ $product->name }}</h5>
                      <p class="text-muted mb-0">${{ number_format($product->price, 2) }}</p>
                    </div>
                  </div>
                  <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="badge bg-danger">${{ number_format($product->price, 2) }}</span>
                    <a href="#" class="btn btn-sm btn-outline-danger">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="text-center py-5">
          <p class="text-muted">No products found matching your criteria.</p>
        </div>
      @endif
    </div>
  </div>
</div>

<style>
.search-header {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 3rem 0;
  border-radius: 15px;
  margin-bottom: 2rem;
}

.search-filters-section .card {
  border: none;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  border-radius: 15px;
}

.nav-tabs .nav-link {
  border: none;
  color: #666;
  font-weight: 500;
  padding: 1rem 1.5rem;
}

.nav-tabs .nav-link.active {
  color: #007bff;
  background: none;
  border-bottom: 3px solid #007bff;
}

.results-section h3 {
  color: #333;
  font-weight: 600;
}

.card {
  border: none;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  border-radius: 15px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
}

.avatar {
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  font-weight: 600;
  color: white;
}

[data-bs-theme="dark"] .search-header {
  background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
}

[data-bs-theme="dark"] .card {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

[data-bs-theme="dark"] .nav-tabs .nav-link {
  color: #aaa;
}

[data-bs-theme="dark"] .nav-tabs .nav-link.active {
  color: #fff;
}

[data-bs-theme="dark"] .results-section h3 {
  color: #fff;
}
</style>
@endsection 