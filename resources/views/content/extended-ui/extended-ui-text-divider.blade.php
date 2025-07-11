@extends('layouts/layoutMaster')

@section('title', 'Text Divider - Extended UI')

@section('content')
  <div class="row gy-6">
    <!-- Basic -->
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Basic</h5>
        <div class="card-body">
          <div class="divider">
            <div class="divider-text">Text</div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Basic -->

    <!-- Text Alignment -->
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Alignment</h5>
        <div class="card-body">
          <div class="divider text-start">
            <div class="divider-text">Start</div>
          </div>
          <div class="divider text-start-center">
            <div class="divider-text">Start-Center</div>
          </div>
          <div class="divider">
            <div class="divider-text">Center (Default)</div>
          </div>
          <div class="divider text-end-center">
            <div class="divider-text">End-Center</div>
          </div>
          <div class="divider text-end">
            <div class="divider-text">End</div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Text Alignment -->

    <!-- Divider Colors -->
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Colors</h5>
        <div class="card-body">
          <div class="divider divider-primary">
            <div class="divider-text">Primary</div>
          </div>
          <div class="divider divider-success">
            <div class="divider-text">Success</div>
          </div>
          <div class="divider divider-danger">
            <div class="divider-text">Danger</div>
          </div>
          <div class="divider divider-warning">
            <div class="divider-text">Warning</div>
          </div>
          <div class="divider divider-info">
            <div class="divider-text">Info</div>
          </div>
          <div class="divider divider-dark">
            <div class="divider-text">Dark</div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Divider Colors -->

    <!-- Icons -->
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Icons</h5>
        <div class="card-body">
          <div class="divider text-start">
            <div class="divider-text">
              <i class="icon-base ti tabler-sun scaleX-n1-rtl align-middle"></i>
            </div>
          </div>
          <div class="divider text-start-center">
            <div class="divider-text">
              <i class="icon-base ti tabler-crown scaleX-n1-rtl align-middle"></i>
            </div>
          </div>
          <div class="divider">
            <div class="divider-text">
              <i class="icon-base ti tabler-star scaleX-n1-rtl align-middle"></i>
            </div>
          </div>
          <div class="divider text-end-center">
            <div class="divider-text">
              <i class="icon-base ti tabler-cup scaleX-n1-rtl align-middle"></i>
            </div>
          </div>
          <div class="divider text-end">
            <div class="divider-text">
              <i class="icon-base ti tabler-cut rotate-270 scaleX-n1-rtl align-middle"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Icons -->

    <!-- Icons -->
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Styles</h5>
        <div class="card-body">
          <div class="divider">
            <div class="divider-text">Solid (Default)</div>
          </div>
          <div class="divider divider-dotted">
            <div class="divider-text">Dotted</div>
          </div>
          <div class="divider divider-dashed">
            <div class="divider-text">Dashed</div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Icons -->

    <!-- Vertical text divider -->
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Vertical</h5>
        <div class="card-body">
          <div class="row gy-4 gy-md-0 h-px-250">
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical">
                <div class="divider-text">Solid(default)</div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical align-items-start">
                <div class="divider-text pt-0">Solid</div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical align-items-end">
                <div class="divider-text pb-0">Solid</div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical divider-dashed">
                <div class="divider-text">Dashed</div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical divider-dotted">
                <div class="divider-text">Dotted</div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical">
                <div class="divider-text">
                  <i class="icon-base ti tabler-crown"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Vertical text divider -->

    <!-- Vertical Divider Colors -->
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Vertical Colors</h5>
        <div class="card-body">
          <div class="row gy-4 gy-md-0 h-px-250">
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical divider-primary">
                <div class="divider-text">Primary</div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical divider-success">
                <div class="divider-text">Success</div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical divider-danger">
                <div class="divider-text">Danger</div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical divider-warning">
                <div class="divider-text">Warning</div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical divider-info">
                <div class="divider-text">Info</div>
              </div>
            </div>
            <div class="col-md-2 col-4">
              <div class="divider divider-vertical divider-dark">
                <div class="divider-text">Dark</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Vertical Divider Colors -->
@endsection
