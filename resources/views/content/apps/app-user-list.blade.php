@extends('layouts/layoutMaster')

@section('title', 'User List - Pages')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss', 'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss', 'resources/assets/vendor/libs/select2/select2.scss', 'resources/assets/vendor/libs/@form-validation/form-validation.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/moment/moment.js', 'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js', 'resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/@form-validation/popular.js', 'resources/assets/vendor/libs/@form-validation/bootstrap5.js', 'resources/assets/vendor/libs/@form-validation/auto-focus.js', 'resources/assets/vendor/libs/cleave-zen/cleave-zen.js'])
@endsection

@section('page-script')
@vite('resources/assets/js/app-user-list.js')
@endsection

@section('content')
<div class="row g-6 mb-6">
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Session</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">21,459</h4>
              <p class="text-success mb-0">(+29%)</p>
            </div>
            <small class="mb-0">Total Users</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-primary">
              <i class="icon-base ti tabler-users icon-26px"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Paid Users</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">4,567</h4>
              <p class="text-success mb-0">(+18%)</p>
            </div>
            <small class="mb-0">Last week analytics </small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-danger">
              <i class="icon-base ti tabler-user-plus icon-26px"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Active Users</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">19,860</h4>
              <p class="text-danger mb-0">(-14%)</p>
            </div>
            <small class="mb-0">Last week analytics</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-success">
              <i class="icon-base ti tabler-user-check icon-26px"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-start justify-content-between">
          <div class="content-left">
            <span class="text-heading">Pending Users</span>
            <div class="d-flex align-items-center my-1">
              <h4 class="mb-0 me-2">237</h4>
              <p class="text-success mb-0">(+42%)</p>
            </div>
            <small class="mb-0">Last week analytics</small>
          </div>
          <div class="avatar">
            <span class="avatar-initial rounded bg-label-warning">
              <i class="icon-base ti tabler-user-search icon-26px"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Users List Table -->
<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title mb-0">Filters</h5>
    <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0">
      <div class="col-md-4 user_role"></div>
      <div class="col-md-4 user_plan"></div>
      <div class="col-md-4 user_status"></div>
    </div>
  </div>
  <div class="card-datatable">
    <table class="datatables-users table">
      <thead class="border-top">
        <tr>
          <th></th>
          <th></th>
          <th>User</th>
          <th>Role</th>
          <th>Plan</th>
          <th>Billing</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
  <!-- Offcanvas to add new user -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
    <div class="offcanvas-header border-bottom">
      <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 p-6 h-100">
      <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
        <div class="mb-6 form-control-validation">
          <label class="form-label" for="add-user-fullname">Full Name</label>
          <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe" />
        </div>
        <div class="mb-6 form-control-validation">
          <label class="form-label" for="add-user-email">Email</label>
          <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail" />
        </div>
        <div class="mb-6">
          <label class="form-label" for="add-user-contact">Contact</label>
          <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact" />
        </div>
        <div class="mb-6">
          <label class="form-label" for="add-user-company">Company</label>
          <input type="text" id="add-user-company" class="form-control" placeholder="Web Developer" aria-label="jdoe1" name="companyName" />
        </div>
        <div class="mb-6">
          <label class="form-label" for="country">Country</label>
          <select id="country" class="select2 form-select">
            <option value="">Select</option>
            <option value="Australia">Australia</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Belarus">Belarus</option>
            <option value="Brazil">Brazil</option>
            <option value="Canada">Canada</option>
            <option value="China">China</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Japan">Japan</option>
            <option value="Korea">Korea, Republic of</option>
            <option value="Mexico">Mexico</option>
            <option value="Philippines">Philippines</option>
            <option value="Russia">Russian Federation</option>
            <option value="South Africa">South Africa</option>
            <option value="Thailand">Thailand</option>
            <option value="Turkey">Turkey</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
          </select>
        </div>
        <div class="mb-6">
          <label class="form-label" for="user-role">User Role</label>
          <select id="user-role" class="form-select">
            <option value="subscriber">Subscriber</option>
            <option value="editor">Editor</option>
            <option value="maintainer">Maintainer</option>
            <option value="author">Author</option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <div class="mb-6">
          <label class="form-label" for="user-plan">Select Plan</label>
          <select id="user-plan" class="form-select">
            <option value="basic">Basic</option>
            <option value="enterprise">Enterprise</option>
            <option value="company">Company</option>
            <option value="team">Team</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary me-3 data-submit">Submit</button>
        <button type="reset" class="btn btn-label-danger" data-bs-dismiss="offcanvas">Cancel</button>
      </form>
    </div>
  </div>
</div>

@endsection