@extends('panel.layouts.app')
@section('title', 'Metropolitian Dashboard')
@section('subtitle', 'Sadananda VDC tax toll.')
@section('content')
<div class="row">
    <div class="col-xxl-4 col-xl-12 mb-4">
        <div class="card h-100">
            <div class="card-body h-100 p-5">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-xxl-12">
                        <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                            <h1 class="text-primary">Sadananda Toll Management Admin Panel</h1>
                            <p class="text-gray-700 mb-0">जननी जन्मभूमिश्च स्वर्गादपी गरीयसी</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" style="width: 13rem; height:13rem;" src="{{ asset('assets/img/favicon.png') }}" style="max-width: 26rem" /></div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Example Colored Cards for Dashboard Demo-->
<div class="row">
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-primary text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 small">Earnings (Monthly)</div>
                        <div class="text-lg fw-bold">$40,000</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="calendar"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Report</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-warning text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 small">Earnings (Annual)</div>
                        <div class="text-lg fw-bold">$215,000</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Report</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-success text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 small">Task Completion</div>
                        <div class="text-lg fw-bold">24</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="check-square"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Tasks</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 mb-4">
        <div class="card bg-danger text-white h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-3">
                        <div class="text-white-75 small">Pending Requests</div>
                        <div class="text-lg fw-bold">17</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between small">
                <a class="text-white stretched-link" href="#!">View Requests</a>
                <div class="text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<!-- Example DataTable for Dashboard Demo-->
<div class="card mb-4">
    <div class="card-header">Personnel Management</div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td><div class="badge bg-primary text-white rounded-pill">Full-time</div></td>
                    <td>
                        <button class="btn btn-datatable btn-icon btn-transparent-dark me-2"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        <button class="btn btn-datatable btn-icon btn-transparent-dark"><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>


@endsection
