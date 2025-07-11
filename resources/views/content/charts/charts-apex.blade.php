@extends('layouts/layoutMaster')

@section('title', 'Apex - Charts')

@section('vendor-style')
  @vite(['resources/assets/vendor/libs/apex-charts/apex-charts.scss'])
@endsection

@section('vendor-script')
  @vite(['resources/assets/vendor/libs/apex-charts/apexcharts.js'])
@endsection

@section('page-script')
  @vite(['resources/assets/js/charts-apex.js'])
@endsection

@section('content')
  <div class="row gy-6">
    <!-- Line Area Chart -->
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div>
            <h5 class="card-title mb-0">Last updates</h5>
            <p class="card-subtitle my-0">Commercial networks</p>
          </div>
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-base ti tabler-calendar"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div id="lineAreaChart"></div>
        </div>
      </div>
    </div>
    <!-- /Line Area Chart -->

    <!-- Bar Chart -->
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-md-center align-items-start">
          <h5 class="card-title mb-0">Data Science</h5>
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-base ti tabler-calendar"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div id="barChart"></div>
        </div>
      </div>
    </div>
    <!-- /Bar Chart -->

    <!-- Scatter Chart -->
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">New Technologies Data</h5>
          <div class="btn-group d-none d-sm-flex" role="group" aria-label="radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="dailyRadio" checked />
            <label class="btn btn-outline-secondary" for="dailyRadio">Daily</label>

            <input type="radio" class="btn-check" name="btnradio" id="monthlyRadio" />
            <label class="btn btn-outline-secondary" for="monthlyRadio">Monthly</label>

            <input type="radio" class="btn-check" name="btnradio" id="yearlyRadio" />
            <label class="btn btn-outline-secondary" for="yearlyRadio">Yearly</label>
          </div>
        </div>
        <div class="card-body">
          <div id="scatterChart"></div>
        </div>
      </div>
    </div>
    <!-- /Scatter Chart -->

    <!-- Line Chart -->
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <div>
            <h5 class="card-title mb-0">Balance</h5>
            <p class="card-subtitle  my-0">Commercial networks & enterprises</p>
          </div>
          <div class="d-sm-flex d-none align-items-center">
            <h5 class="mb-0 me-4">$ 100,000</h5>
            <span class="badge bg-label-secondary">
              <i class="icon-base ti tabler-arrow-down icon-xs text-danger"></i>
              <span class="align-middle">20%</span>
            </span>
          </div>
        </div>
        <div class="card-body">
          <div id="lineChart"></div>
        </div>
      </div>
    </div>
    <!-- /Line Chart -->

    <!-- Bar Chart -->
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <div>
            <p class="card-subtitle text-body-secondary mb-1">Balance</p>
            <h5 class="card-title mb-0">$74,382.72</h5>
          </div>
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-base ti tabler-calendar"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div id="horizontalBarChart"></div>
        </div>
      </div>
    </div>
    <!-- /Bar Chart -->

    <!-- Candlestick Chart -->
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <div>
            <h5 class="card-title mb-0">Stocks Prices</h5>
            <p class="card-subtitle my-0">$50,863.98</p>
          </div>
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-base ti tabler-calendar"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div id="candleStickChart"></div>
        </div>
      </div>
    </div>
    <!-- /Candlestick Chart -->

    <!-- Heat map Chart -->
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Daily Sales States</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1" type="button"
              id="heatChartDd" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ti tabler-dots-vertical icon-lg"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="heatChartDd">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div id="heatMapChart"></div>
        </div>
      </div>
    </div>
    <!-- /Heat map Chart -->

    <!-- Radial bar Chart -->
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="card-title mb-0">Statistics</h5>
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-base ti tabler-calendar"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div id="radialBarChart"></div>
        </div>
      </div>
    </div>
    <!-- /Radial bar Chart -->

    <!-- Radar Chart -->
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Mobile Comparison</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-body-secondary border-0 p-2 me-n1" type="button"
              id="heatChartDd1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-base ti tabler-dots-vertical icon-lg"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="heatChartDd1">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div id="radarChart"></div>
        </div>
      </div>
    </div>
    <!-- /Radar Chart -->

    <!-- Donut Chart -->
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <div>
            <h5 class="card-title mb-0">Expense Ratio</h5>
            <p class="card-subtitle my-0">Spending on various categories</p>
          </div>
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-base ti tabler-calendar"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <div id="donutChart"></div>
        </div>
      </div>
    </div>
    <!-- /Donut Chart -->
  </div>
@endsection
