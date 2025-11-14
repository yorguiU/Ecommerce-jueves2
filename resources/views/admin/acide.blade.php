@extends('admin.app')

@section('contente')

<div class="container-fluid py-2">
  <div class="row">
    <div class="ms-3">
      <h3 class="mb-0 h4 font-weight-bolder">ACID - Database Integrity</h3>
      <p class="mb-4">
        Manage database transactions and data integrity settings.
      </p>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Transaction Log</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    ID
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Type
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Status
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Date
                  </th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">#001</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Create</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Completed</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">14/11/2025</span>
                  </td>
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                      data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">#002</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Update</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Pending</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">14/11/2025</span>
                  </td>
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                      data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">#003</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Delete</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Completed</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">13/11/2025</span>
                  </td>
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                      data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>ACID Properties</h6>
        </div>
        <div class="card-body">
          <div class="d-flex mb-3">
            <div>
              <span class="badge bg-gradient-success">A</span>
            </div>
            <div class="ms-2">
              <p class="text-sm mb-1 font-weight-bold">Atomicity</p>
              <p class="text-xs text-muted mb-0">All or nothing transactions</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div>
              <span class="badge bg-gradient-info">C</span>
            </div>
            <div class="ms-2">
              <p class="text-sm mb-1 font-weight-bold">Consistency</p>
              <p class="text-xs text-muted mb-0">Data validity maintained</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div>
              <span class="badge bg-gradient-warning">I</span>
            </div>
            <div class="ms-2">
              <p class="text-sm mb-1 font-weight-bold">Isolation</p>
              <p class="text-xs text-muted mb-0">Concurrent access control</p>
            </div>
          </div>
          <div class="d-flex">
            <div>
              <span class="badge bg-gradient-danger">D</span>
            </div>
            <div class="ms-2">
              <p class="text-sm mb-1 font-weight-bold">Durability</p>
              <p class="text-xs text-muted mb-0">Data persistence guaranteed</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-lg-4">
      <div class="card">
        <div class="card-header p-3 pb-0">
          <h6 class="mb-0">Transactions Completed</h6>
        </div>
        <div class="card-body p-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Total</p>
              <h4 class="mb-0">1,234</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-success shadow-success shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">check_circle</i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card">
        <div class="card-header p-3 pb-0">
          <h6 class="mb-0">Transactions Failed</h6>
        </div>
        <div class="card-body p-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Total</p>
              <h4 class="mb-0">12</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-danger shadow-danger shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">cancel</i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="card">
        <div class="card-header p-3 pb-0">
          <h6 class="mb-0">Pending Transactions</h6>
        </div>
        <div class="card-body p-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Total</p>
              <h4 class="mb-0">8</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-warning shadow-warning shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">schedule</i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
