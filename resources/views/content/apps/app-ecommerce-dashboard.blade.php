@extends('layouts/layoutMaster')

@section('title', 'eCommerce Dashboard - Apps')

@section('vendor-style')
@vite([
'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss'
])
@endsection

@section('vendor-script')
@vite([
'resources/assets/vendor/libs/apex-charts/apexcharts.js',
'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js'
])
@endsection

@section('page-script')
@vite(['resources/assets/js/app-ecommerce-dashboard.js'])
@endsection

@section('content')
<div class="row g-6">
  <!-- View sales -->
  <div class="col-xl-4">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-7">
          <div class="card-body text-nowrap">
            <h5 class="card-title mb-0">Congratulations John! 🎉</h5>
            <p class="mb-2">Best seller of the month</p>
            <h4 class="text-primary mb-1">$48.9k</h4>
            <a href="javascript:;" class="btn btn-primary">View Sales</a>
          </div>
        </div>
        <div class="col-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{ asset('assets/img/illustrations/card-advance-sale.png')}}" height="140" alt="view sales" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- View sales -->

  <!-- Statistics -->
  <div class="col-xl-8 col-md-12">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <h5 class="card-title mb-0">Statistics</h5>
        <small class="text-body-secondary">Updated 1 month ago</small>
      </div>
      <div class="card-body d-flex align-items-end">
        <div class="w-100">
          <div class="row gy-3">
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center">
                <div class="badge rounded bg-label-primary me-4 p-2">
                  <i class="icon-base ti tabler-chart-pie-2 icon-lg"></i>
                </div>
                <div class="card-info">
                  <h5 class="mb-0">230k</h5>
                  <small>Sales</small>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center">
                <div class="badge rounded bg-label-info me-4 p-2"><i class="icon-base ti tabler-users icon-lg"></i>
                </div>
                <div class="card-info">
                  <h5 class="mb-0">8.549k</h5>
                  <small>Customers</small>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center">
                <div class="badge rounded bg-label-danger me-4 p-2">
                  <i class="icon-base ti tabler-shopping-cart icon-lg"></i>
                </div>
                <div class="card-info">
                  <h5 class="mb-0">1.423k</h5>
                  <small>Products</small>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center">
                <div class="badge rounded bg-label-success me-4 p-2">
                  <i class="icon-base ti tabler-currency-dollar icon-lg"></i>
                </div>
                <div class="card-info">
                  <h5 class="mb-0">$9745</h5>
                  <small>Revenue</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Statistics -->

  <div class="col-xxl-4 col-12">
    <div class="row g-6">
      <!-- Profit last month -->
      <div class="col-xl-6 col-sm-6">
        <div class="card h-100">
          <div class="card-header pb-0">
            <h5 class="card-title mb-1">Profit</h5>
            <p class="card-subtitle">Last Month</p>
          </div>
          <div class="card-body">
            <div id="profitLastMonth"></div>
            <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
              <h4 class="mb-0">624k</h4>
              <small class="text-success">+8.24%</small>
            </div>
          </div>
        </div>
      </div>
      <!--/ Profit last month -->

      <!-- Expenses -->
      <div class="col-xl-6 col-sm-6">
        <div class="card h-100">
          <div class="card-header pb-2">
            <h5 class="card-title mb-1">82.5k</h5>
            <p class="card-subtitle">Expenses</p>
          </div>
          <div class="card-body">
            <div id="expensesChart"></div>
            <div class="mt-3 text-center">
              <small class="text-body-secondary mt-3">$21k Expenses more than last month</small>
            </div>
          </div>
        </div>
      </div>
      <!--/ Expenses -->

      <!-- Generated Leads -->
      <div class="col-xl-12">
        <div class="card h-100">
          <div class="card-body d-flex justify-content-between">
            <div class="d-flex flex-column">
              <div class="card-title mb-auto">
                <h5 class="mb-0 text-nowrap">Generated Leads</h5>
                <p class="mb-0">Monthly Report</p>
              </div>
              <div class="chart-statistics">
                <h3 class="card-title mb-0">4,350</h3>
                <p class="text-success text-nowrap mb-0"><i class="icon-base ti tabler-chevron-up me-1"></i> 15.8%</p>
              </div>
            </div>
            <div id="generatedLeadsChart"></div>
          </div>
        </div>
      </div>
      <!--/ Generated Leads -->
    </div>
  </div>

  <!-- Revenue Report -->
  <div class="col-xxl-8">
    <div class="card h-100">
      <div class="card-body p-0">
        <div class="row row-bordered g-0">
          <div class="col-md-8 position-relative p-6">
            <div class="card-header d-inline-block p-0 text-wrap position-absolute">
              <h5 class="m-0 card-title">Revenue Report</h5>
            </div>
            <div id="totalRevenueChart" class="mt-n1"></div>
          </div>
          <div class="col-md-4 p-4">
            <div class="text-center mt-5">
              <div class="dropdown">
                <button class="btn btn-sm btn-label-primary dropdown-toggle" type="button" id="budgetId"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <script>
                  document.write(new Date().getFullYear());
                  </script>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                  <a class="dropdown-item prev-year1" href="javascript:void(0);">
                    <script>
                    document.write(new Date().getFullYear() - 1);
                    </script>
                  </a>
                  <a class="dropdown-item prev-year2" href="javascript:void(0);">
                    <script>
                    document.write(new Date().getFullYear() - 2);
                    </script>
                  </a>
                  <a class="dropdown-item prev-year3" href="javascript:void(0);">
                    <script>
                    document.write(new Date().getFullYear() - 3);
                    </script>
                  </a>
                </div>
              </div>
            </div>
            <h3 class="text-center pt-8 mb-0">$25,825</h3>
            <p class="mb-8 text-center"><span class="fw-medium text-heading">Budget: </span>56,800</p>
            <div class="px-3">
              <div id="budgetChart"></div>
            </div>
            <div class="text-center mt-8">
              <button type="button" class="btn btn-primary">Increase Button</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Revenue Report -->

  <!-- Earning Reports -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Earning Reports</h5>
          <p class="card-subtitle">Weekly Earnings Overview</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1" type="button"
            id="earningReports" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ti tabler-dots-vertical icon-md text-body-secondary"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body pb-0">
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-5">
            <div class="me-4">
              <span class="badge bg-label-primary rounded p-1_5">
                <i class="icon-base ti tabler-chart-pie-2 icon-md"></i>
              </span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Net Profit</h6>
                <small class="text-body">12.4k Sales</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-4">
                <small>$1,619</small>
                <div class="d-flex align-items-center gap-1">
                  <i class="icon-base ti tabler-chevron-up text-success"></i>
                  <small class="text-body-secondary">18.6%</small>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-5">
            <div class="me-4">
              <span class="badge bg-label-success rounded p-1_5">
                <i class="icon-base ti tabler-currency-dollar icon-md"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Total Income</h6>
                <small class="text-body">Sales, Affiliation</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-4">
                <small>$3,571</small>
                <div class="d-flex align-items-center gap-1">
                  <i class="icon-base ti tabler-chevron-up text-success"></i>
                  <small class="text-body-secondary">39.6%</small>
                </div>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-5">
            <div class="me-4">
              <span class="badge bg-label-secondary text-body rounded p-1_5"><i
                  class="icon-base ti tabler-credit-card icon-md"></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Total Expenses</h6>
                <small class="text-body">ADVT, Marketing</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-4">
                <small>$430</small>
                <div class="d-flex align-items-center gap-1">
                  <i class="icon-base ti tabler-chevron-up text-success"></i>
                  <small class="text-body-secondary">52.8%</small>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div id="reportBarChart"></div>
      </div>
    </div>
  </div>
  <!--/ Earning Reports -->

  <!-- Popular Product -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title m-0 me-2">
          <h5 class="mb-1">Popular Products</h5>
          <p class="card-subtitle">Total 10.4k Visitors</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1" type="button"
            id="popularProduct" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ti tabler-dots-vertical icon-md text-body-secondary"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularProduct">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-6">
            <div class="me-4">
              <img src="{{ asset('assets/img/products/iphone.png')}}" alt="User" class="rounded" width="46" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Apple iPhone 13</h6>
                <small class="text-body d-block">Item: #FXZ-4567</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0">$999.29</p>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="me-4">
              <img src="{{ asset('assets/img/products/nike-air-jordan.png')}}" alt="User" class="rounded" width="46" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Nike Air Jordan</h6>
                <small class="text-body d-block">Item: #FXZ-3456</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0">$72.40</p>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="me-4">
              <img src="{{ asset('assets/img/products/headphones.png')}}" alt="User" class="rounded" width="46" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Beats Studio 2</h6>
                <small class="text-body d-block">Item: #FXZ-9485</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0">$99</p>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="me-4">
              <img src="{{ asset('assets/img/products/apple-watch.png')}}" alt="User" class="rounded" width="46" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Apple Watch Series 7</h6>
                <small class="text-body d-block">Item: #FXZ-2345</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0">$249.99</p>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="me-4">
              <img src="{{ asset('assets/img/products/amazon-echo.png')}}" alt="User" class="rounded" width="46" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Amazon Echo Dot</h6>
                <small class="text-body d-block">Item: #FXZ-8959</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0">$79.40</p>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="me-4">
              <img src="{{ asset('assets/img/products/play-station.png')}}" alt="User" class="rounded" width="46" />
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Play Station Console</h6>
                <small class="text-body d-block">Item: #FXZ-7892</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <p class="mb-0">$129.48</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Popular Product -->

  <!-- Sales by Countries tabs-->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Orders by Countries</h5>
          <p class="card-subtitle">62 deliveries in progress</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1" type="button"
            id="salesByCountryTabs" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ti tabler-dots-vertical icon-md text-body-secondary"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountryTabs">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="nav-align-top">
          <ul class="nav nav-tabs nav-fill rounded-0 timeline-indicator-advanced" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                data-bs-target="#navs-justified-new" aria-controls="navs-justified-new"
                aria-selected="true">New</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                data-bs-target="#navs-justified-link-preparing" aria-controls="navs-justified-link-preparing"
                aria-selected="false">Preparing</button>
            </li>
            <li class="nav-item">
              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                data-bs-target="#navs-justified-link-shipping" aria-controls="navs-justified-link-shipping"
                aria-selected="false">Shipping</button>
            </li>
          </ul>
          <div class="tab-content border-0  mx-1">
            <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="icon-base ti tabler-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Myrtle Ullrich</h6>
                    <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-0">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="icon-base ti tabler-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Barry Schowalter</h6>
                    <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-dashed my-4"></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="icon-base ti tabler-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Veronica Herman</h6>
                    <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-0">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="icon-base ti tabler-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Helen Jacobs</h6>
                    <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>

            <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="icon-base ti tabler-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Barry Schowalter</h6>
                    <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-0">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="icon-base ti tabler-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Myrtle Ullrich</h6>
                    <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-dashed my-4"></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="icon-base ti tabler-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Veronica Herman</h6>
                    <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-0">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="icon-base ti tabler-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Helen Jacobs</h6>
                    <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="icon-base ti tabler-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Veronica Herman</h6>
                    <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-0">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="icon-base ti tabler-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Barry Schowalter</h6>
                    <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                  </div>
                </li>
              </ul>
              <div class="border-1 border-light border-dashed my-4"></div>
              <ul class="timeline mb-0">
                <li class="timeline-item ps-6 border-dashed">
                  <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                    <i class="icon-base ti tabler-circle-check"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-success text-uppercase">sender</small>
                    </div>
                    <h6 class="my-50">Myrtle Ullrich</h6>
                    <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                  </div>
                </li>
                <li class="timeline-item ps-6 border-0">
                  <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                    <i class="icon-base ti tabler-map-pin"></i>
                  </span>
                  <div class="timeline-event ps-1">
                    <div class="timeline-header">
                      <small class="text-primary text-uppercase">Receiver</small>
                    </div>
                    <h6 class="my-50">Helen Jacobs</h6>
                    <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Sales by Countries tabs -->

  <!-- Transactions -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title m-0 me-2">
          <h5 class="mb-1">Transactions</h5>
          <p class="card-subtitle">Total 58 Transactions done in this Month</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1" type="button"
            id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-base ti tabler-dots-vertical icon-md text-body-secondary"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-primary me-4 rounded p-1_5">
              <i class="icon-base ti tabler-wallet icon-md"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Wallet</h6>
                <small class="text-body d-block">Starbucks</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-danger">-$75</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-success me-4 rounded p-1_5">
              <i class="icon-base ti tabler-browser-check icon-md"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Bank Transfer</h6>
                <small class="text-body d-block">Add Money</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-success">+$480</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-danger me-4 rounded p-1_5">
              <i class="icon-base ti tabler-brand-paypal icon-md"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Paypal</h6>
                <small class="text-body d-block">Client Payment</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-success">+$268</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-secondary me-4 rounded p-1_5">
              <i class="icon-base ti tabler-credit-card icon-md"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Master Card</h6>
                <small class="text-body d-block">Ordered iPhone 13</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-danger">-$699</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-info me-4 rounded p-1_5">
              <i class="icon-base ti tabler-currency-dollar icon-md"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Bank Transactions</h6>
                <small class="text-body d-block">Refund</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-success">+$98</h6>
              </div>
            </div>
          </li>
          <li class="d-flex mb-3 pb-1 align-items-center">
            <div class="badge bg-label-danger me-4 rounded p-1_5">
              <i class="icon-base ti tabler-brand-paypal icon-md"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Paypal</h6>
                <small class="text-body d-block">Client Payment</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-success">+$126</h6>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="badge bg-label-success me-4 rounded p-1_5">
              <i class="icon-base ti tabler-building-bank icon-md"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Bank Transfer</h6>
                <small class="text-body d-block">Pay Office Rent</small>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0 text-danger">-$1290</h6>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->

  <!-- Invoice table -->
  <div class="col-xxl-8">
    <div class="card">
      <div class="card-datatable table-responsive">
        <table class="table table-sm datatable-invoice border-top">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>#</th>
              <th>Status</th>
              <th>Total</th>
              <th>Issued Date</th>
              <th>Invoice Status</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
  <!-- /Invoice table -->
</div>
@endsection
