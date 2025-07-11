@extends('layouts/layoutMaster')

@section('title', 'DataTables - Advanced Tables')

<!-- Vendor Styles -->
@section('vendor-style')
@vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
'resources/assets/vendor/libs/flatpickr/flatpickr.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite(['resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
'resources/assets/vendor/libs/moment/moment.js', 'resources/assets/vendor/libs/flatpickr/flatpickr.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/tables-datatables-advanced.js'])
@endsection

@section('content')
<!-- Ajax Sourced Server-side -->
<div class="card">
  <h5 class="card-header pb-0 text-md-start text-center">Ajax Sourced Server-side</h5>
  <div class="card-datatable text-nowrap">
    <table class="datatables-ajax table table-bordered">
      <thead>
        <tr>
          <th>Full name</th>
          <th>Email</th>
          <th>Position</th>
          <th>Office</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!--/ Ajax Sourced Server-side -->

<hr class="my-12" />

<!-- Column Search -->
<div class="card">
  <h5 class="card-header pb-0 text-md-start text-center">Column Search</h5>
  <div class="card-datatable text-nowrap">
    <table class="dt-column-search table table-bordered table-responsive">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Post</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Post</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!--/ Column Search -->

<hr class="my-12" />

<!-- Advanced Search -->
<div class="card">
  <h5 class="card-header">Advanced Search</h5>
  <!--Search Form -->
  <div class="card-body">
    <form class="dt_adv_search" method="POST">
      <div class="row">
        <div class="col-12">
          <div class="row g-3">
            <div class="col-12 col-sm-6 col-lg-4">
              <label class="form-label">Name:</label>
              <input type="text" class="form-control dt-input dt-full-name" data-column="1" placeholder="Alaric Beslier"
                data-column-index="0" />
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <label class="form-label">Email:</label>
              <input type="text" class="form-control dt-input" data-column="2" placeholder="demo@example.com"
                data-column-index="1" />
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <label class="form-label">Post:</label>
              <input type="text" class="form-control dt-input" data-column="3" placeholder="Web designer"
                data-column-index="2" />
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <label class="form-label">City:</label>
              <input type="text" class="form-control dt-input" data-column="4" placeholder="Balky"
                data-column-index="3" />
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <label class="form-label">Date:</label>
              <div class="mb-0">
                <input type="text" class="form-control dt-date flatpickr-range dt-input" data-column="5"
                  placeholder="StartDate to EndDate" data-column-index="4" name="dt_date" />
                <input type="hidden" class="form-control dt-date start_date dt-input" data-column="5"
                  data-column-index="4" name="value_from_start_date" />
                <input type="hidden" class="form-control dt-date end_date dt-input" name="value_from_end_date"
                  data-column="5" data-column-index="4" />
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <label class="form-label">Salary:</label>
              <input type="text" class="form-control dt-input" data-column="6" placeholder="10000"
                data-column-index="5" />
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="card-datatable">
    <table class="dt-advanced-search table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Email</th>
          <th>Post</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Email</th>
          <th>Post</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!--/ Advanced Search -->

<hr class="my-12" />

<!-- Responsive Datatable -->
<div class="card">
  <h5 class="card-header pb-0 text-md-start text-center">Responsive Datatable</h5>
  <div class="card-datatable">
    <table class="dt-responsive table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Email</th>
          <th>Post</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Age</th>
          <th>Experience</th>
          <th>Status</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Email</th>
          <th>Post</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Age</th>
          <th>Experience</th>
          <th>Status</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!--/ Responsive Datatable -->

<hr class="my-12" />

<!-- Responsive with Child Rows -->
<div class="card">
  <h5 class="card-header pb-0 text-md-start text-center">Responsive with Child Rows</h5>
  <div class="card-datatable">
    <table class="dt-responsive-child table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Email</th>
          <th>City</th>
          <th>Date</th>
          <th>Age</th>
          <th>Status</th>
        </tr>
      </thead>
    </table>
  </div>
  <!--/ Responsive with Child Rows -->
</div>
@endsection
