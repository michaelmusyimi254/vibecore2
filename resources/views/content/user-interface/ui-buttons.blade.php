@extends('layouts/layoutMaster')

@section('title', 'Buttons - UI elements')

@section('content')
  <div class="row g-6">
    <!-- Basic Buttons -->

    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Basic Buttons</h5>
        <div class="card-body">
          <small class="fw-medium">Default</small>
          <div class="demo-inline-spacing">
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-dark">Dark</button>
          </div>
        </div>
        <hr class="m-0" />
        <div class="card-body">
          <small class="fw-medium">Rounded</small>
          <div class="demo-inline-spacing">
            <button type="button" class="btn rounded-pill btn-primary">Primary</button>
            <button type="button" class="btn rounded-pill btn-secondary">Secondary</button>
            <button type="button" class="btn rounded-pill btn-success">Success</button>
            <button type="button" class="btn rounded-pill btn-danger">Danger</button>
            <button type="button" class="btn rounded-pill btn-warning">Warning</button>
            <button type="button" class="btn rounded-pill btn-info">Info</button>
            <button type="button" class="btn rounded-pill btn-dark">Dark</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Label Buttons -->

    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Label Buttons</h5>
        <div class="card-body">
          <small class="fw-medium">Default</small>
          <div class="demo-inline-spacing">
            <button type="button" class="btn btn-label-primary">Primary</button>
            <button type="button" class="btn btn-label-secondary">Secondary</button>
            <button type="button" class="btn btn-label-success">Success</button>
            <button type="button" class="btn btn-label-danger">Danger</button>
            <button type="button" class="btn btn-label-warning">Warning</button>
            <button type="button" class="btn btn-label-info">Info</button>
            <button type="button" class="btn btn-label-dark">Dark</button>
          </div>
        </div>
        <hr class="m-0" />
        <div class="card-body">
          <small class="fw-medium">Rounded</small>
          <div class="demo-inline-spacing">
            <button type="button" class="btn rounded-pill btn-label-primary">Primary</button>
            <button type="button" class="btn rounded-pill btn-label-secondary">Secondary</button>
            <button type="button" class="btn rounded-pill btn-label-success">Success</button>
            <button type="button" class="btn rounded-pill btn-label-danger">Danger</button>
            <button type="button" class="btn rounded-pill btn-label-warning">Warning</button>
            <button type="button" class="btn rounded-pill btn-label-info">Info</button>
            <button type="button" class="btn rounded-pill btn-label-dark">Dark</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Outline Buttons -->

    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Outline Buttons</h5>
        <div class="card-body">
          <small class="fw-medium">Default</small>
          <div class="demo-inline-spacing">
            <button type="button" class="btn btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-outline-secondary">Secondary</button>
            <button type="button" class="btn btn-outline-success">Success</button>
            <button type="button" class="btn btn-outline-danger">Danger</button>
            <button type="button" class="btn btn-outline-warning">Warning</button>
            <button type="button" class="btn btn-outline-info">Info</button>
            <button type="button" class="btn btn-outline-dark">Dark</button>
          </div>
        </div>
        <hr class="m-0" />
        <div class="card-body">
          <small class="fw-medium">Rounded</small>
          <div class="demo-inline-spacing">
            <button type="button" class="btn rounded-pill btn-outline-primary">Primary</button>
            <button type="button" class="btn rounded-pill btn-outline-secondary">Secondary</button>
            <button type="button" class="btn rounded-pill btn-outline-success">Success</button>
            <button type="button" class="btn rounded-pill btn-outline-danger">Danger</button>
            <button type="button" class="btn rounded-pill btn-outline-warning">Warning</button>
            <button type="button" class="btn rounded-pill btn-outline-info">Info</button>
            <button type="button" class="btn rounded-pill btn-outline-dark">Dark</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Text Buttons -->

    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Text Buttons</h5>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <button type="button" class="btn btn-text-primary">Primary</button>
            <button type="button" class="btn btn-text-secondary">Secondary</button>
            <button type="button" class="btn btn-text-success">Success</button>
            <button type="button" class="btn btn-text-danger">Danger</button>
            <button type="button" class="btn btn-text-warning">Warning</button>
            <button type="button" class="btn btn-text-info">Info</button>
            <button type="button" class="btn btn-text-dark">Dark</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Buttons with Icons -->

    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Buttons with Icons</h5>
        <div class="row row-bordered g-0">
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Basic</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-primary"><span
                  class="icon-xs icon-base ti tabler-star me-2"></span>Primary</button>
              <button type="button" class="btn btn-secondary"><span
                  class="icon-xs icon-base ti tabler-bell me-2"></span>Secondary</button>
            </div>
            <div class="demo-inline-spacing">
              <button type="button" class="btn rounded-pill btn-primary"><span
                  class="icon-xs icon-base ti tabler-star me-2"></span>Primary</button>
              <button type="button" class="btn rounded-pill btn-secondary"><span
                  class="icon-xs icon-base ti tabler-bell me-2"></span>Secondary</button>
            </div>
          </div>
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Label</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-label-primary"><span
                  class="icon-xs icon-base ti tabler-star me-2"></span>Primary</button>
              <button type="button" class="btn btn-label-secondary"><span
                  class="icon-xs icon-base ti tabler-bell me-2"></span>Secondary</button>
            </div>
            <div class="demo-inline-spacing">
              <button type="button" class="btn rounded-pill btn-label-primary"><span
                  class="icon-xs icon-base ti tabler-star me-2"></span>Primary</button>
              <button type="button" class="btn rounded-pill btn-label-secondary"><span
                  class="icon-xs icon-base ti tabler-bell me-2"></span>Secondary</button>
            </div>
          </div>
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Outline</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-outline-primary"><span
                  class="icon-xs icon-base ti tabler-star me-2"></span>Primary</button>
              <button type="button" class="btn btn-outline-secondary"><span
                  class="icon-xs icon-base ti tabler-bell me-2"></span>Secondary</button>
            </div>
            <div class="demo-inline-spacing">
              <button type="button" class="btn rounded-pill btn-outline-primary"><span
                  class="icon-xs icon-base ti tabler-star me-2"></span>Primary</button>
              <button type="button" class="btn rounded-pill btn-outline-secondary"><span
                  class="icon-xs icon-base ti tabler-bell me-2"></span>Secondary</button>
            </div>
          </div>
        </div>
        <hr class="m-0" />
        <div class="row row-bordered g-0">
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Basic</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-icon btn-primary">
                <span class="icon-base ti tabler-star icon-22px"></span>
              </button>
              <button type="button" class="btn btn-icon btn-secondary">
                <span class="icon-base ti tabler-bell icon-22px"></span>
              </button>
              <button type="button" class="btn rounded-pill btn-icon btn-primary">
                <span class="icon-base ti tabler-star icon-22px"></span>
              </button>
              <button type="button" class="btn rounded-pill btn-icon btn-secondary">
                <span class="icon-base ti tabler-bell icon-22px"></span>
              </button>
            </div>
          </div>
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Label</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-icon btn-label-primary">
                <span class="icon-base ti tabler-star icon-22px"></span>
              </button>
              <button type="button" class="btn btn-icon btn-label-secondary">
                <span class="icon-base ti tabler-bell icon-22px"></span>
              </button>
              <button type="button" class="btn rounded-pill btn-icon btn-label-primary">
                <span class="icon-base ti tabler-star icon-22px"></span>
              </button>
              <button type="button" class="btn rounded-pill btn-icon btn-label-secondary">
                <span class="icon-base ti tabler-bell icon-22px"></span>
              </button>
            </div>
          </div>
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Outline</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-icon btn-outline-primary">
                <span class="icon-base ti tabler-star icon-22px"></span>
              </button>
              <button type="button" class="btn btn-icon btn-outline-secondary">
                <span class="icon-base ti tabler-bell icon-22px"></span>
              </button>
              <button type="button" class="btn rounded-pill btn-icon btn-outline-primary">
                <span class="icon-base ti tabler-star icon-22px"></span>
              </button>
              <button type="button" class="btn rounded-pill btn-icon btn-outline-secondary">
                <span class="icon-base ti tabler-bell icon-22px"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Social Button -->

    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Social Button</h5>
        <div class="row row-bordered g-0">
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Basic</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-facebook"><i
                  class="icon-base ti tabler-brand-facebook icon-xs me-1"></i> Facebook</button>
              <button type="button" class="btn btn-twitter"><i
                  class="icon-base ti tabler-brand-twitter icon-xs me-1"></i> Twitter</button>
            </div>
            <div class="demo-inline-spacing">
              <button type="button" class="btn rounded-pill btn-google-plus"><i
                  class="icon-base ti tabler-brand-google icon-xs me-2"></i> Google+</button>
              <button type="button" class="btn rounded-pill btn-instagram"><i
                  class="icon-base ti tabler-brand-instagram icon-xs me-2"></i> Instagram</button>
            </div>
          </div>
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Label</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-label-linkedin"><i
                  class="icon-base ti tabler-brand-linkedin icon-xs me-2"></i> Linkedin</button>
              <button type="button" class="btn btn-label-github"><i
                  class="icon-base ti tabler-brand-github icon-xs me-2"></i> Github</button>
            </div>
            <div class="demo-inline-spacing">
              <button type="button" class="btn rounded-pill btn-label-pinterest"><i
                  class="icon-base ti tabler-brand-pinterest icon-xs me-2"></i> Pinterest</button>
              <button type="button" class="btn rounded-pill btn-label-slack"><i
                  class="icon-base ti tabler-brand-slack icon-xs me-2"></i> Slack</button>
            </div>
          </div>
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Outline & Text</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-outline-dribbble"><i
                  class="icon-base ti tabler-brand-dribbble icon-xs me-2"></i> Dribbble</button>
              <button type="button" class="btn btn-text-reddit"><i
                  class="icon-base ti tabler-brand-reddit icon-xs me-2"></i> Reddit</button>
            </div>
            <div class="demo-inline-spacing">
              <button type="button" class="btn rounded-pill btn-outline-youtube"><i
                  class="icon-base ti tabler-brand-youtube icon-xs me-2"></i> Youtube</button>
              <button type="button" class="btn rounded-pill btn-text-vimeo"><i
                  class="icon-base ti tabler-brand-vimeo icon-xs me-2"></i> Vimeo</button>
            </div>
          </div>
        </div>
        <hr class="m-0" />
        <div class="row row-bordered g-0">
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Basic Icons</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-icon btn-facebook"><i
                  class="icon-base ti tabler-brand-facebook icon-22px"></i></button>
              <button type="button" class="btn btn-icon btn-twitter"><i
                  class="icon-base ti tabler-brand-twitter icon-22px"></i></button>
              <button type="button" class="btn btn-icon rounded-pill btn-google-plus">
                <i class="icon-base ti tabler-brand-google icon-22px"></i>
              </button>
              <button type="button" class="btn btn-icon rounded-pill btn-instagram">
                <i class="icon-base ti tabler-brand-instagram icon-22px"></i>
              </button>
            </div>
          </div>
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Label Icons</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-icon btn-label-linkedin"><i
                  class="icon-base ti tabler-brand-linkedin icon-22px"></i></button>
              <button type="button" class="btn btn-icon btn-label-github"><i
                  class="icon-base ti tabler-brand-github icon-22px"></i></button>
              <button type="button" class="btn btn-icon rounded-pill btn-label-pinterest">
                <i class="icon-base ti tabler-brand-pinterest icon-22px"></i>
              </button>
              <button type="button" class="btn btn-icon rounded-pill btn-label-slack">
                <i class="icon-base ti tabler-brand-slack icon-22px"></i>
              </button>
            </div>
          </div>
          <div class="col-lg-4 p-6">
            <small class="fw-medium">Outline & Text Icons</small>
            <div class="demo-inline-spacing">
              <button type="button" class="btn btn-icon btn-outline-dribbble">
                <i class="icon-base ti tabler-brand-dribbble icon-22px"></i>
              </button>
              <button type="button" class="btn btn-icon btn-text-reddit"><i
                  class="icon-base ti tabler-brand-reddit icon-22px"></i></button>
              <button type="button" class="btn btn-icon rounded-pill btn-outline-youtube">
                <i class="icon-base ti tabler-brand-youtube icon-22px"></i>
              </button>
              <button type="button" class="btn btn-icon rounded-pill btn-text-vimeo">
                <i class="icon-base ti tabler-brand-vimeo icon-22px"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Button Options -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Button Options</h5>
        <div class="card-body">
          <small class="fw-medium">Sizes</small>
          <div class="demo-inline-spacing">
            <button type="button" class="btn btn-xl btn-primary">Button xl</button>
            <button type="button" class="btn btn-lg btn-primary">Button lg</button>
            <button type="button" class="btn btn-primary">Button</button>
            <button type="button" class="btn btn-sm btn-primary">Button sm</button>
            <button type="button" class="btn btn-xs btn-primary">Button xs</button>
          </div>
        </div>
        <hr class="m-0" />
        <div class="card-body">
          <small class="fw-medium">Buttons State</small>
          <div class="demo-inline-spacing">
            <button type="button" class="btn btn-primary">Normal</button>
            <button type="button" class="btn btn-primary active">Active</button>
            <button type="button" class="btn btn-primary" disabled>Disabled</button>
          </div>
        </div>
        <hr class="m-0" />
        <div class="card-body">
          <small class="fw-medium">Block level buttons</small>
          <div class="row mt-4">
            <div class="d-grid gap-2 col-lg-6 mx-auto">
              <button class="btn btn-primary btn-lg" type="button">Button</button>
              <button class="btn btn-secondary btn-lg" type="button">Button</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Button Plugin -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Button Plugin</h5>
        <div class="row row-bordered g-0">
          <div class="col-xl-3 p-6">
            <div class="small fw-medium">Toggle states</div>
            <div class="demo-vertical-spacing">
              <button type="button" class="btn btn-primary d-block" data-bs-toggle="button">Toggle
                button</button>
              <button type="button" class="btn btn-primary active d-block" data-bs-toggle="button"
                aria-pressed="true">Active toggle button</button>
              <button type="button" class="btn btn-primary d-block" disabled data-bs-toggle="button">Disabled toggle
                button</button>
            </div>
          </div>
          <div class="col-xl-3 p-6">
            <div class="small fw-medium">Checkbox toggle buttons</div>
            <div class="demo-vertical-spacing">
              <div class="d-block">
                <input type="checkbox" class="btn-check" id="btn-check" />
                <label class="btn btn-primary" for="btn-check">Single toggle</label>
              </div>
              <div class="d-block">
                <input type="checkbox" class="btn-check" id="btn-check-2" checked />
                <label class="btn btn-primary" for="btn-check-2">Checked</label>
              </div>
              <div class="d-block">
                <input type="checkbox" class="btn-check" id="btn-check-3" checked />
                <label class="btn btn-primary" for="btn-check-3">Checked</label>
              </div>
            </div>
          </div>
          <div class="col-xl-6 p-6">
            <div class="small fw-medium">Checkbox and radio</div>

            <div class="demo-vertical-spacing">
              <!-- Checkbox -->

              <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" checked />
                <label class="btn btn-outline-primary" for="btncheck1">
                  <span class="d-block d-sm-none">
                    <i class="icon-base ti tabler-home icon-sm"></i>
                  </span>
                  <span class="d-none d-sm-block">Checkbox 1 (pre-checked)</span>
                </label>

                <input type="checkbox" class="btn-check" id="btncheck2" />
                <label class="btn btn-outline-primary" for="btncheck2">
                  <span class="d-block d-sm-none">
                    <i class="icon-base ti tabler-plane-tilt icon-sm"></i>
                  </span>
                  <span class="d-none d-sm-block"> Checkbox 2</span>
                </label>

                <input type="checkbox" class="btn-check" id="btncheck3" />
                <label class="btn btn-outline-primary" for="btncheck3">
                  <span class="d-block d-sm-none">
                    <i class="icon-base ti tabler-bell icon-sm"></i>
                  </span>
                  <span class="d-none d-sm-block"> Checkbox 3</span>
                </label>
              </div>

              <br />

              <!-- Radio -->

              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked />
                <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" />
                <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" />
                <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Button Group -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Button Group</h5>
        <div class="card-body">
          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <small class="fw-medium">Basic</small>
              <div class="mt-4">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-secondary">Left</button>
                  <button type="button" class="btn btn-secondary">Middle</button>
                  <button type="button" class="btn btn-secondary">Right</button>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <small class="fw-medium">Label</small>
              <div class="mt-4">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-label-secondary">Left</button>
                  <button type="button" class="btn btn-label-secondary">Middle</button>
                  <button type="button" class="btn btn-label-secondary">Right</button>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <small class="fw-medium">Outline</small>
              <div class="mt-4">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-outline-secondary">Left</button>
                  <button type="button" class="btn btn-outline-secondary">Middle</button>
                  <button type="button" class="btn btn-outline-secondary">Right</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="m-0" />
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6 mb-xl-0 mb-4">
              <small class="fw-medium">Button Toolbar</small>
              <div class="btn-toolbar demo-inline-spacing" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-bell"></i></button>
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-clipboard"></i></button>
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-device-tv"></i></button>
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-browser-check"></i></button>
                </div>
                <div class="btn-group" role="group" aria-label="Second group">
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-bold"></i></button>
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-italic"></i></button>
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-underline"></i></button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-volume-2"></i></button>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <small class="fw-medium">Button Nesting</small>
              <div class="mt-4">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-truck"></i></button>
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-sun"></i></button>
                  <button type="button" class="btn btn-outline-secondary"><i
                      class="icon-base ti tabler-cloud"></i></button>
                  <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="icon-base ti tabler-dots-vertical icon-md d-sm-none"></i><span
                        class="d-none d-sm-block">Dropdown</span></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                      <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
