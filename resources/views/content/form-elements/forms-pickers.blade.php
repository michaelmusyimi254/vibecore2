@extends('layouts/layoutMaster')

@section('title', 'Pickers - Forms')

<!-- Vendor Styles -->
@section('vendor-style')
  @vite(['resources/assets/vendor/libs/flatpickr/flatpickr.scss', 'resources/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.scss', 'resources/assets/vendor/libs/jquery-timepicker/jquery-timepicker.scss', 'resources/assets/vendor/libs/pickr/pickr-themes.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
  @vite(['resources/assets/vendor/libs/moment/moment.js', 'resources/assets/vendor/libs/flatpickr/flatpickr.js', 'resources/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js', 'resources/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js', 'resources/assets/vendor/libs/pickr/pickr.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
  @vite(['resources/assets/js/forms-pickers.js'])
@endsection

@section('content')
  <div class="row">
    <!-- Flat Picker -->
    <div class="col-12 mb-6">
      <div class="card">
        <h5 class="card-header">Flatpickr</h5>
        <div class="card-body">
          <div class="row">
            <!-- Date Picker-->
            <div class="col-md-6 col-12 mb-6">
              <label for="flatpickr-date" class="form-label">Date Picker</label>
              <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date" />
            </div>
            <!-- /Date Picker -->

            <!-- Time Picker-->
            <div class="col-md-6 col-12 mb-6">
              <label for="flatpickr-time" class="form-label">Time Picker</label>
              <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time" />
            </div>
            <!-- /Time Picker -->

            <!-- Datetime Picker-->
            <div class="col-md-6 col-12 mb-6">
              <label for="flatpickr-datetime" class="form-label">Datetime Picker</label>
              <input type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM" id="flatpickr-datetime" />
            </div>
            <!-- /Datetime Picker-->

            <!-- Multiple Dates Picker-->
            <div class="col-md-6 col-12 mb-6">
              <label for="flatpickr-multi" class="form-label">Multiple Dates Picker</label>
              <input type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM" id="flatpickr-multi" />
            </div>
            <!-- /Multiple Dates Picker-->

            <!-- Range Picker-->
            <div class="col-md-6 col-12 mb-6">
              <label for="flatpickr-range" class="form-label">Range Picker</label>
              <input type="text" class="form-control" placeholder="YYYY-MM-DD to YYYY-MM-DD" id="flatpickr-range" />
            </div>
            <!-- /Range Picker-->

            <!-- Human Friendly Date Picker-->
            <div class="col-md-6 col-12 mb-6">
              <label for="flatpickr-human-friendly" class="form-label">Human Friendly Date Picker</label>
              <input type="text" class="form-control" placeholder="Month DD, YYYY" id="flatpickr-human-friendly" />
            </div>
            <!-- /Human Friendly Date Picker-->

            <!-- Disabled Range-->
            <div class="col-md-6 col-12 mb-md-0 mb-6">
              <label for="flatpickr-disabled-range" class="form-label">Disabled Range</label>
              <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-disabled-range" />
            </div>
            <!-- /Disabled Range-->

            <!-- Inline Picker-->
            <div class="col-md-6 col-12">
              <label for="flatpickr-inline" class="form-label">Inline Picker</label>
              <input type="text" class="form-control mb-1" placeholder="YYYY-MM-DD" id="flatpickr-inline" />
            </div>
            <!-- /Inline Picker-->
          </div>
        </div>
      </div>
    </div>
    <!-- /Flatpickr -->

    <!-- Bootstrap Daterangepicker -->
    <div class="col-12 mb-6">
      <div class="card">
        <h5 class="card-header">Bootstrap Daterange Picker</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 col-12 mb-6">
              <label for="bs-rangepicker-basic" class="form-label">Basic</label>
              <input type="text" id="bs-rangepicker-basic" class="form-control" />
            </div>
            <div class="col-md-6 col-12 mb-6">
              <label for="bs-rangepicker-single" class="form-label">Single Picker</label>
              <input type="text" id="bs-rangepicker-single" class="form-control" />
            </div>
            <div class="col-md-6 col-12 mb-6">
              <label for="bs-rangepicker-time" class="form-label">With Time Picker</label>
              <input type="text" id="bs-rangepicker-time" class="form-control" />
            </div>
            <div class="col-md-6 col-12 mb-6">
              <label for="bs-rangepicker-range" class="form-label">Ranges</label>
              <input type="text" id="bs-rangepicker-range" class="form-control" />
            </div>
            <div class="col-md-6 col-12 mb-md-0 mb-6">
              <label for="bs-rangepicker-week-num" class="form-label">Week Numbers</label>
              <input type="text" id="bs-rangepicker-week-num" class="form-control" />
            </div>
            <div class="col-md-6 col-12">
              <label for="bs-rangepicker-dropdown" class="form-label">Month & Year Dropdown</label>
              <input type="text" id="bs-rangepicker-dropdown" class="form-control" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Bootstrap Daterangepicker -->

    <!-- jQuery Timepicker -->
    <div class="col-12 mb-6">
      <div class="card">
        <h5 class="card-header">jQuery Timepicker</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 col-12 mb-6">
              <label for="timepicker-basic" class="form-label">Basic</label>
              <input type="text" id="timepicker-basic" placeholder="HH:MMam" class="form-control" />
            </div>
            <div class="col-md-6 col-12 mb-6">
              <label for="timepicker-min-max" class="form-label">Min-Max</label>
              <input type="text" id="timepicker-min-max" placeholder="HH:MMam" class="form-control" />
            </div>
            <div class="col-md-6 col-12 mb-6">
              <label for="timepicker-disabled-times" class="form-label">Disabled Times</label>
              <input type="text" id="timepicker-disabled-times" placeholder="HH:MMam" class="form-control" />
            </div>
            <div class="col-md-6 col-12 mb-6">
              <label for="timepicker-format" class="form-label">Format</label>
              <input type="text" id="timepicker-format" placeholder="HH:MM:SS" class="form-control" />
            </div>
            <div class="col-md-6 col-12 mb-md-0 mb-6">
              <label for="timepicker-step" class="form-label">Step</label>
              <input type="text" id="timepicker-step" placeholder="HH:MMam" class="form-control" />
            </div>
            <div class="col-md-6 col-12">
              <label for="timepicker-24hours" class="form-label">24 Hours Format</label>
              <input type="text" id="timepicker-24hours" placeholder="20:00:00" class="form-control" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /jQuery Timepicker -->

    <!-- Color Picker -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Color Picker</h5>
        <div class="card-body">
          <div class="row">
            <div class="classic col col-sm-3 col-lg-2">
              <p>Classic</p>
              <div id="color-picker-classic"></div>
            </div>
            <div class="monolith col col-sm-3 col-lg-2">
              <p>Monolith</p>
              <div id="color-picker-monolith"></div>
            </div>
            <div class="nano col col-sm-3 col-lg-2">
              <p>Nano</p>
              <div id="color-picker-nano"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Color Picker-->
  </div>

@endsection
