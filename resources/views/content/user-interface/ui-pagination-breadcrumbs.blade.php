@extends('layouts/layoutMaster')

@section('title', 'Pagination and breadcrumbs - UI elements')

@section('content')
  <div class="row gy-6">
    <div class="col-lg-12">
      <div class="card">
        <h5 class="card-header">Pagination</h5>
        <!-- Basic Pagination -->
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <small class="fw-medium">Basic</small>
              <div class="demo-inline-spacing">
                <!-- Basic Pagination -->
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <!--/ Basic Pagination -->
                <!-- Basic rounded Pagination -->
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-rounded">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <!--/ Basic rounded Pagination -->
              </div>
            </div>
            <div class="col-lg-6">
              <small class="fw-medium">Basic Pagination Shape</small>
              <div class="demo-inline-spacing">
                <!-- Outline Pagination -->
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-outline-primary">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <!--/ Outline Pagination -->
                <!-- Outline rounded Pagination -->
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-rounded pagination-outline-primary">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <!--/ Outline rounded Pagination -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pagination Sizes -->
    <div class="col-lg-12">
      <div class="card">
        <h5 class="card-header">Sizes & Alignments</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <small class="fw-medium">Sizes</small>
              <div class="demo-inline-spacing">
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-sm">
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-xs"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-xs"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-lg">
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-lg"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-lg"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-lg-8">
              <small class="fw-medium">Alignments</small>
              <div class="demo-inline-spacing">
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-end">
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Pagination Sizes -->

    <!-- Pagination color options -->
    <div class="col-lg-12">
      <div class="card">
        <h5 class="card-header">Pagination Color Options</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <small class="fw-medium">Basic</small>
              <div class="demo-inline-spacing">
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-primary">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-secondary">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-success">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-danger">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-warning">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-info">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-lg-6">
              <small class="fw-medium">Outline</small>
              <div class="demo-inline-spacing">
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-outline-primary">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-outline-secondary">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-outline-success">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-outline-danger">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-outline-warning">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-outline-info">
                    <li class="page-item first">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-left icon-sm"></i></a>
                    </li>
                    <li class="page-item prev">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-left icon-sm"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevron-right icon-sm"></i></a>
                    </li>
                    <li class="page-item last">
                      <a class="page-link" href="javascript:void(0);"><i
                          class="icon-base ti tabler-chevrons-right icon-sm"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Pagination color options -->

    <!-- Breadcrumb -->
    <div class="col-lg-12">
      <div class="card">
        <h5 class="card-header">Breadcrumbs</h5>
        <div class="card-body">
          <!-- Basic Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Library</a>
              </li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </nav>
          <!-- Basic Breadcrumb -->
          <!-- Custom style1 Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom-icon">
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Home</a>
                <i class="breadcrumb-icon icon-base ti tabler-chevron-right align-middle icon-xs"></i>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Library</a>
                <i class="breadcrumb-icon icon-base ti tabler-chevron-right align-middle icon-xs"></i>
              </li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </nav>
          <!--/ Custom style1 Breadcrumb -->
          <!-- Custom style2 Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom-icon mb-0">
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Home</a>
                <i class="breadcrumb-icon icon-base ti tabler-check align-middle icon-xs"></i>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Library</a>
                <i class="breadcrumb-icon icon-base ti tabler-check align-middle icon-xs"></i>
              </li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </nav>
          <!--/ Custom style2 Breadcrumb -->
        </div>
      </div>
    </div>
    <!--/ Breadcrumb -->
  </div>
@endsection
