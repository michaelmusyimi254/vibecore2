@extends('layouts/layoutMaster')

@section('title', 'Wizard Icons - Forms')

<!-- Vendor Styles -->
@section('vendor-style')
  @vite(['resources/assets/vendor/libs/bs-stepper/bs-stepper.scss', 'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss', 'resources/assets/vendor/libs/select2/select2.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
  @vite(['resources/assets/vendor/libs/bs-stepper/bs-stepper.js', 'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js', 'resources/assets/vendor/libs/select2/select2.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
  @vite(['resources/assets/js/form-wizard-icons.js'])
@endsection

@section('content')
  <p class="mb-6">
    Icons used on this page are made by <a href="https://www.flaticon.com/authors/itim2101" title="itim2101"
      target="_blank">itim2101</a> from
    <a href="https://www.flaticon.com/" title="Flaticon" target="_blank">www.flaticon.com</a>
  </p>
  <!-- Default -->
  <div class="row">
    <div class="col-12">
      <h5>Default</h5>
    </div>

    <!-- Default Icons Wizard -->
    <div class="col-12 mb-6">
      <small class="fw-medium">Basic Icons</small>
      <div class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-header">
          <div class="step" data-target="#account-details">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{ asset('assets/svg/icons/form-wizard-account.svg#wizardAccount') }}">
                  </use>
                </svg>
              </span>
              <span class="bs-stepper-label">Account Details</span>
            </button>
          </div>
          <div class="line">
            <i class="icon-base ti tabler-chevron-right"></i>
          </div>
          <div class="step" data-target="#personal-info">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 58 54">
                  <use xlink:href="{{ asset('assets/svg/icons/form-wizard-personal.svg#wizardPersonal') }}">
                  </use>
                </svg>
              </span>
              <span class="bs-stepper-label">Personal Info</span>
            </button>
          </div>
          <div class="line">
            <i class="icon-base ti tabler-chevron-right"></i>
          </div>
          <div class="step" data-target="#address">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{ asset('assets/svg/icons/form-wizard-address.svg#wizardAddress') }}">
                  </use>
                </svg>
              </span>
              <span class="bs-stepper-label">Address</span>
            </button>
          </div>
          <div class="line">
            <i class="icon-base ti tabler-chevron-right"></i>
          </div>
          <div class="step" data-target="#social-links">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{ asset('assets/svg/icons/form-wizard-social-link.svg#wizardSocialLink') }}">
                  </use>
                </svg>
              </span>
              <span class="bs-stepper-label">Social Links</span>
            </button>
          </div>
          <div class="line">
            <i class="icon-base ti tabler-chevron-right"></i>
          </div>
          <div class="step" data-target="#review-submit">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{ asset('assets/svg/icons/form-wizard-submit.svg#wizardSubmit') }}">
                  </use>
                </svg>
              </span>
              <span class="bs-stepper-label">Review & Submit</span>
            </button>
          </div>
        </div>
        <div class="bs-stepper-content">
          <form onSubmit="return false">
            <!-- Account Details -->
            <div id="account-details" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Account Details</h6>
                <small>Enter Your Account Details.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="username">Username</label>
                  <input type="text" id="username" class="form-control" placeholder="johndoe" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="john.doe@email.com"
                    aria-label="john.doe" />
                </div>
                <div class="col-sm-6 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password2" />
                    <span class="input-group-text cursor-pointer" id="password2"><i
                        class="icon-base ti tabler-eye-off"></i></span>
                  </div>
                </div>
                <div class="col-sm-6 form-password-toggle">
                  <label class="form-label" for="confirm-password">Confirm Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="confirm-password" class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="confirm-password2" />
                    <span class="input-group-text cursor-pointer" id="confirm-password2"><i
                        class="icon-base ti tabler-eye-off"></i></span>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev" disabled>
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Personal Info -->
            <div id="personal-info" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Personal Info</h6>
                <small>Enter Your Personal Info.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="first-name">First Name</label>
                  <input type="text" id="first-name" class="form-control" placeholder="John" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name">Last Name</label>
                  <input type="text" id="last-name" class="form-control" placeholder="Doe" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="country">Country</label>
                  <select class="select2" id="country">
                    <option label=" "></option>
                    <option>UK</option>
                    <option>USA</option>
                    <option>Spain</option>
                    <option>France</option>
                    <option>Italy</option>
                    <option>Australia</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="language">Language</label>
                  <select class="selectpicker w-auto" id="language" data-style="btn-transparent"
                    data-icon-base="icon-base ti" data-tick-icon="tabler-check text-white" multiple>
                    <option>English</option>
                    <option>French</option>
                    <option>Spanish</option>
                  </select>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Address -->
            <div id="address" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Address</h6>
                <small>Enter Your Address.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="address-input">Address</label>
                  <input type="text" class="form-control" id="address-input"
                    placeholder="98  Borough bridge Road, Birmingham" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="landmark">Landmark</label>
                  <input type="text" class="form-control" id="landmark" placeholder="Borough bridge" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="pincode">Pincode</label>
                  <input type="text" class="form-control" id="pincode" placeholder="658921" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="city">City</label>
                  <input type="text" class="form-control" id="city" placeholder="Birmingham" />
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Social Links -->
            <div id="social-links" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Social Links</h6>
                <small>Enter Your Social Links.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="twitter">Twitter</label>
                  <input type="text" id="twitter" class="form-control" placeholder="https://twitter.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="facebook">Facebook</label>
                  <input type="text" id="facebook" class="form-control" placeholder="https://facebook.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="google">Google+</label>
                  <input type="text" id="google" class="form-control"
                    placeholder="https://plus.google.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="linkedin">Linkedin</label>
                  <input type="text" id="linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Review -->
            <div id="review-submit" class="content">
              <p class="fw-medium mb-2">Account</p>
              <ul class="list-unstyled">
                <li>Username</li>
                <li>example@email.com</li>
              </ul>
              <hr />
              <p class="fw-medium mb-2">Personal Info</p>
              <ul class="list-unstyled">
                <li>First Name</li>
                <li>Last Name</li>
                <li>Country</li>
                <li>Language</li>
              </ul>
              <hr />
              <p class="fw-medium mb-2">Address</p>
              <ul class="list-unstyled">
                <li>Address</li>
                <li>Landmark</li>
                <li>Pincode</li>
                <li>City</li>
              </ul>
              <hr />
              <p class="fw-medium mb-2">Social Links</p>
              <ul class="list-unstyled">
                <li>https://twitter.com/abc</li>
                <li>https://facebook.com/abc</li>
                <li>https://plus.google.com/abc</li>
                <li>https://linkedin.com/abc</li>
              </ul>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev">
                  <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-success btn-submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Default Icons Wizard -->

    <!-- Vertical Icons Wizard -->
    <div class="col-12 mb-6">
      <small class="fw-medium">Vertical Icons</small>
      <div class="bs-stepper vertical wizard-vertical-icons-example mt-2">
        <div class="bs-stepper-header">
          <div class="step" data-target="#account-details-vertical">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-circle">
                <i class="icon-base ti tabler-file-description icon-md"></i>
              </span>
              <span class="bs-stepper-label">
                <span class="bs-stepper-title">Account Details</span>
                <span class="bs-stepper-subtitle">Setup Account Details</span>
              </span>
            </button>
          </div>
          <div class="line"></div>
          <div class="step" data-target="#personal-info-vertical">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-circle">
                <i class="icon-base ti tabler-user icon-md"></i>
              </span>
              <span class="bs-stepper-label">
                <span class="bs-stepper-title">Personal Info</span>
                <span class="bs-stepper-subtitle">Add personal info</span>
              </span>
            </button>
          </div>
          <div class="line"></div>
          <div class="step" data-target="#social-links-vertical">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-circle"><i class="icon-base ti tabler-brand-instagram icon-md"></i> </span>
              <span class="bs-stepper-label">
                <span class="bs-stepper-title">Social Links</span>
                <span class="bs-stepper-subtitle">Add social links</span>
              </span>
            </button>
          </div>
        </div>
        <div class="bs-stepper-content">
          <form onSubmit="return false">
            <!-- Account Details -->
            <div id="account-details-vertical" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Account Details</h6>
                <small>Enter Your Account Details.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="username1">Username</label>
                  <input type="text" id="username1" class="form-control" placeholder="john.doe" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="email1">Email</label>
                  <input type="text" id="email1" class="form-control" placeholder="john.doe"
                    aria-label="john.doe" />
                </div>
                <div class="col-sm-6 form-password-toggle">
                  <label class="form-label" for="password60">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password60" class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password6" />
                    <span class="input-group-text cursor-pointer" id="password6"><i
                        class="icon-base ti tabler-eye-off"></i></span>
                  </div>
                </div>
                <div class="col-sm-6 form-password-toggle">
                  <label class="form-label" for="confirm-password61">Confirm Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="confirm-password61" class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="confirm-password7" />
                    <span class="input-group-text cursor-pointer" id="confirm-password7"><i
                        class="icon-base ti tabler-eye-off"></i></span>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev" disabled>
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Personal Info -->
            <div id="personal-info-vertical" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Personal Info</h6>
                <small>Enter Your Personal Info.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="first-name1">First Name</label>
                  <input type="text" id="first-name1" class="form-control" placeholder="John" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name1">Last Name</label>
                  <input type="text" id="last-name1" class="form-control" placeholder="Doe" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="country1">Country</label>
                  <select class="select2" id="country1">
                    <option label=" "></option>
                    <option>UK</option>
                    <option>USA</option>
                    <option>Spain</option>
                    <option>France</option>
                    <option>Italy</option>
                    <option>Australia</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="language1">Language</label>
                  <select class="selectpicker w-auto" id="language1" data-style="btn-default"
                    data-icon-base="icon-base ti" data-tick-icon="tabler-check text-white" multiple>
                    <option>English</option>
                    <option>French</option>
                    <option>Spanish</option>
                  </select>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Social Links -->
            <div id="social-links-vertical" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Social Links</h6>
                <small>Enter Your Social Links.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="twitter1">Twitter</label>
                  <input type="text" id="twitter1" class="form-control" placeholder="https://twitter.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="facebook1">Facebook</label>
                  <input type="text" id="facebook1" class="form-control" placeholder="https://facebook.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="google1">Google+</label>
                  <input type="text" id="google1" class="form-control"
                    placeholder="https://plus.google.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="linkedin1">Linkedin</label>
                  <input type="text" id="linkedin1" class="form-control" placeholder="https://linkedin.com/abc" />
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-success btn-submit">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Vertical Icons Wizard -->
  </div>

  <hr class="container-m-nx mb-12" />

  <!-- Modern -->
  <div class="row">
    <div class="col-12">
      <h5>Modern</h5>
    </div>

    <!-- Modern Icons Wizard -->
    <div class="col-12 mb-6">
      <small class="fw-medium">Modern Style Wizard With Icons</small>
      <div class="bs-stepper wizard-icons wizard-modern wizard-modern-icons-example mt-2">
        <div class="bs-stepper-header">
          <div class="step" data-target="#account-details-modern">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{ asset('assets/svg/icons/form-wizard-account.svg#wizardAccount') }}">
                  </use>
                </svg>
              </span>
              <span class="bs-stepper-label">Account Details</span>
            </button>
          </div>
          <div class="line">
            <i class="icon-base ti tabler-chevron-right"></i>
          </div>
          <div class="step" data-target="#personal-info-modern">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 58 54">
                  <use xlink:href="{{ asset('assets/svg/icons/form-wizard-personal.svg#wizardPersonal') }}">
                  </use>
                </svg>
              </span>
              <span class="bs-stepper-label">Personal Info</span>
            </button>
          </div>
          <div class="line">
            <i class="icon-base ti tabler-chevron-right"></i>
          </div>
          <div class="step" data-target="#address-modern">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{ asset('assets/svg/icons/form-wizard-address.svg#wizardAddress') }}">
                  </use>
                </svg>
              </span>
              <span class="bs-stepper-label">Address</span>
            </button>
          </div>
          <div class="line">
            <i class="icon-base ti tabler-chevron-right"></i>
          </div>
          <div class="step" data-target="#social-links-modern">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{ asset('assets/svg/icons/form-wizard-social-link.svg#wizardSocialLink') }}">
                  </use>
                </svg>
              </span>
              <span class="bs-stepper-label">Social Links</span>
            </button>
          </div>
          <div class="line">
            <i class="icon-base ti tabler-chevron-right"></i>
          </div>
          <div class="step" data-target="#review-submit-modern">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-icon">
                <svg viewBox="0 0 54 54">
                  <use xlink:href="{{ asset('assets/svg/icons/form-wizard-submit.svg#wizardSubmit') }}">
                  </use>
                </svg>
              </span>
              <span class="bs-stepper-label">Review & Submit</span>
            </button>
          </div>
        </div>
        <div class="bs-stepper-content">
          <form onSubmit="return false">
            <!-- Account Details -->
            <div id="account-details-modern" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Account Details</h6>
                <small>Enter Your Account Details.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="username-modern">Username</label>
                  <input type="text" id="username-modern" class="form-control" placeholder="johndoe" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="email-modern">Email</label>
                  <input type="email" id="email-modern" class="form-control" placeholder="john.doe@email.com"
                    aria-label="john.doe" />
                </div>
                <div class="col-sm-6 form-password-toggle">
                  <label class="form-label" for="password-modern">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password-modern" class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password2-modern" />
                    <span class="input-group-text cursor-pointer" id="password2-modern"><i
                        class="icon-base ti tabler-eye-off"></i></span>
                  </div>
                </div>
                <div class="col-sm-6 form-password-toggle">
                  <label class="form-label" for="confirm-password-modern">Confirm Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="confirm-password-modern" class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="confirm-password2-modern" />
                    <span class="input-group-text cursor-pointer" id="confirm-password2-modern"><i
                        class="icon-base ti tabler-eye-off"></i></span>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev" disabled>
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Personal Info -->
            <div id="personal-info-modern" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Personal Info</h6>
                <small>Enter Your Personal Info.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="first-name-modern">First Name</label>
                  <input type="text" id="first-name-modern" class="form-control" placeholder="John" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name-modern">Last Name</label>
                  <input type="text" id="last-name-modern" class="form-control" placeholder="Doe" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="country-modern">Country</label>
                  <select class="select2" id="country-modern">
                    <option label=" "></option>
                    <option>UK</option>
                    <option>USA</option>
                    <option>Spain</option>
                    <option>France</option>
                    <option>Italy</option>
                    <option>Australia</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="language-modern">Language</label>
                  <select class="selectpicker w-auto" id="language-modern" data-style="btn-transparent"
                    data-icon-base="icon-base ti" data-tick-icon="tabler-check text-white" multiple>
                    <option>English</option>
                    <option>French</option>
                    <option>Spanish</option>
                  </select>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Address -->
            <div id="address-modern" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Address</h6>
                <small>Enter Your Address.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="address-modern-input">Address</label>
                  <input type="text" class="form-control" id="address-modern-input"
                    placeholder="98  Borough bridge Road, Birmingham" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="landmark-modern">Landmark</label>
                  <input type="text" class="form-control" id="landmark-modern" placeholder="Borough bridge" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="pincode-modern">Pincode</label>
                  <input type="text" class="form-control" id="pincode-modern" placeholder="658921" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="city-modern">City</label>
                  <input type="text" class="form-control" id="city-modern" placeholder="Birmingham" />
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Social Links -->
            <div id="social-links-modern" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Social Links</h6>
                <small>Enter Your Social Links.</small>
              </div>

              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="twitter-modern">Twitter</label>
                  <input type="text" id="twitter-modern" class="form-control"
                    placeholder="https://twitter.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="facebook-modern">Facebook</label>
                  <input type="text" id="facebook-modern" class="form-control"
                    placeholder="https://facebook.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="google-modern">Google+</label>
                  <input type="text" id="google-modern" class="form-control"
                    placeholder="https://plus.google.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="linkedin-modern">Linkedin</label>
                  <input type="text" id="linkedin-modern" class="form-control"
                    placeholder="https://linkedin.com/abc" />
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Review -->
            <div id="review-submit-modern" class="content">
              <p class="fw-medium mb-2">Account</p>
              <ul class="list-unstyled">
                <li>Username</li>
                <li>example@email.com</li>
              </ul>
              <hr />
              <p class="fw-medium mb-2">Personal Info</p>
              <ul class="list-unstyled">
                <li>First Name</li>
                <li>Last Name</li>
                <li>Country</li>
                <li>Language</li>
              </ul>
              <hr />
              <p class="fw-medium mb-2">Address</p>
              <ul class="list-unstyled">
                <li>Address</li>
                <li>Landmark</li>
                <li>Pincode</li>
                <li>City</li>
              </ul>
              <hr />
              <p class="fw-medium mb-2">Social Links</p>
              <ul class="list-unstyled">
                <li>https://twitter.com/abc</li>
                <li>https://facebook.com/abc</li>
                <li>https://plus.google.com/abc</li>
                <li>https://linkedin.com/abc</li>
              </ul>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev">
                  <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-success btn-submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Modern Icons Wizard -->

    <!-- Modern Vertical Icons Wizard -->
    <div class="col-12">
      <small class="fw-medium">Vertical Icons</small>
      <div class="bs-stepper vertical wizard-modern wizard-modern-vertical-icons-example mt-2">
        <div class="bs-stepper-header">
          <div class="step" data-target="#account-details-vertical-modern">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-circle">
                <i class="icon-base ti tabler-file-description icon-md"></i>
              </span>
              <span class="bs-stepper-label">
                <span class="bs-stepper-title">Account Details</span>
                <span class="bs-stepper-subtitle">Setup Account Details</span>
              </span>
            </button>
          </div>
          <div class="line"></div>
          <div class="step" data-target="#personal-info-vertical-modern">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-circle">
                <i class="icon-base ti tabler-user icon-md"></i>
              </span>
              <span class="bs-stepper-label">
                <span class="bs-stepper-title">Personal Info</span>
                <span class="bs-stepper-subtitle">Add personal info</span>
              </span>
            </button>
          </div>
          <div class="line"></div>
          <div class="step" data-target="#social-links-vertical-modern">
            <button type="button" class="step-trigger">
              <span class="bs-stepper-circle"><i class="icon-base ti tabler-brand-instagram icon-md"></i> </span>
              <span class="bs-stepper-label">
                <span class="bs-stepper-title">Social Links</span>
                <span class="bs-stepper-subtitle">Add social links</span>
              </span>
            </button>
          </div>
        </div>
        <div class="bs-stepper-content">
          <form onSubmit="return false">
            <!-- Account Details -->
            <div id="account-details-vertical-modern" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Account Details</h6>
                <small>Enter Your Account Details.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="username-modern-vertical">Username</label>
                  <input type="text" id="username-modern-vertical" class="form-control" placeholder="john.doe" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="email-modern-vertical">Email</label>
                  <input type="text" id="email-modern-vertical" class="form-control" placeholder="john.doe"
                    aria-label="john.doe" />
                </div>
                <div class="col-sm-6 form-password-toggle">
                  <label class="form-label" for="password-modern-vertical">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password-modern-vertical" class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password-modern-vertical1" />
                    <span class="input-group-text cursor-pointer" id="password-modern-vertical1"><i
                        class="icon-base ti tabler-eye-off"></i></span>
                  </div>
                </div>
                <div class="col-sm-6 form-password-toggle">
                  <label class="form-label" for="confirm-password-modern-vertical2">Confirm Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="confirm-password-modern-vertical2" class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="confirm-password-modern-vertical3" />
                    <span class="input-group-text cursor-pointer" id="confirm-password-modern-vertical3"><i
                        class="icon-base ti tabler-eye-off"></i></span>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev" disabled>
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Personal Info -->
            <div id="personal-info-vertical-modern" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Personal Info</h6>
                <small>Enter Your Personal Info.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="first-name-modern-vertical">First Name</label>
                  <input type="text" id="first-name-modern-vertical" class="form-control" placeholder="John" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="last-name-modern-vertical">Last Name</label>
                  <input type="text" id="last-name-modern-vertical" class="form-control" placeholder="Doe" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="country-vertical-modern">Country</label>
                  <select class="select2" id="country-vertical-modern">
                    <option label=" "></option>
                    <option>UK</option>
                    <option>USA</option>
                    <option>Spain</option>
                    <option>France</option>
                    <option>Italy</option>
                    <option>Australia</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="language-vertical-modern">Language</label>
                  <select class="selectpicker w-auto" id="language-vertical-modern" data-style="btn-default"
                    data-icon-base="icon-base ti" data-tick-icon="tabler-check text-white" multiple>
                    <option>English</option>
                    <option>French</option>
                    <option>Spanish</option>
                  </select>
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"><span
                      class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i
                      class="icon-base ti tabler-arrow-right icon-xs"></i></button>
                </div>
              </div>
            </div>
            <!-- Social Links -->
            <div id="social-links-vertical-modern" class="content">
              <div class="content-header mb-4">
                <h6 class="mb-0">Social Links</h6>
                <small>Enter Your Social Links.</small>
              </div>
              <div class="row g-6">
                <div class="col-sm-6">
                  <label class="form-label" for="twitter-vertical-modern">Twitter</label>
                  <input type="text" id="twitter-vertical-modern" class="form-control"
                    placeholder="https://twitter.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="facebook-vertical-modern">Facebook</label>
                  <input type="text" id="facebook-vertical-modern" class="form-control"
                    placeholder="https://facebook.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="google-vertical-modern">Google+</label>
                  <input type="text" id="google-vertical-modern" class="form-control"
                    placeholder="https://plus.google.com/abc" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="linkedin-vertical-modern">Linkedin</label>
                  <input type="text" id="linkedin-vertical-modern" class="form-control"
                    placeholder="https://linkedin.com/abc" />
                </div>
                <div class="col-12 d-flex justify-content-between">
                  <button class="btn btn-label-secondary btn-prev">
                    <i class="icon-base ti tabler-arrow-left icon-xs me-sm-2"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-success btn-submit">Submit</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Modern Vertical Icons Wizard -->
  </div>
@endsection
