@extends('layouts.app')
@section('title', 'Metropolitian Dashboard')
@section('subtitle', 'Sadananda VDC tax toll.')
@section('content')

<!-- Main page content-->
<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="assets/img/demo/user-placeholder.svg" alt="" />
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputFirstName" required>First name</label>
                                <input class="form-control @error('firstName') is-invalid
                                @enderror" id="inputFirstName" name="firstName" type="text" placeholder="Enter your first name" value="" />
                            </div>

                            <div class="col-md-4">
                                <label class="small mb-1" for="inputMiddleName">Middle name</label>
                                <input class="form-control @error('middleName') is-invalid
                                @enderror" name="middleName" id="inputMiddleName" type="text" placeholder="Enter your middle name(Nullable)" value="" />
                            </div>

                            <div class="col-md-4">
                                <label class="small mb-1" for="inputLastName" required>Last name</label>
                                <input class="form-control @error('lastName') is-invalid
                                @enderror" name="lastName" id="inputLastName" type="text" placeholder="Enter your last name" value="" />
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputAddress" required>Address</label>
                                <input class="form-control @error('lastName') is-invalid
                                @enderror" id="inputAddress" type="text" placeholder="Enter your Address" value="" />
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputContactNumber" required>Contact Number</label>
                                <input class="form-control @error('contactNumber') is-invalid
                                @enderror" name="contactNumber" id="inputContactNumber" type="text" placeholder="Enter your Contact Number" value="" />
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control @error('email') is-invalid
                                @enderror" name="email" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="" />
                        </div>
                        <!-- Form Group (Group Selection Checkboxes)-->
                        {{-- <div class="mb-3">
                            <label class="small mb-1">Group(s)</label>
                            <div class="form-check">
                                <input class="form-check-input" id="groupSales" type="checkbox" value="" />
                                <label class="form-check-label" for="groupSales">Sales</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="groupDevs" type="checkbox" value="" />
                                <label class="form-check-label" for="groupDevs">Developers</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="groupMarketing" type="checkbox" value="" />
                                <label class="form-check-label" for="groupMarketing">Marketing</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="groupManagers" type="checkbox" value="" />
                                <label class="form-check-label" for="groupManagers">Managers</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="groupCustomer" type="checkbox" value="" />
                                <label class="form-check-label" for="groupCustomer">Customer</label>
                            </div>
                        </div>
                        <!-- Form Group (Roles)-->
                        <div class="mb-3">
                            <label class="small mb-1">Role</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected="" disabled="">Select a role:</option>
                                <option value="administrator">Administrator</option>
                                <option value="registered">Registered</option>
                                <option value="edtior">Editor</option>
                                <option value="guest">Guest</option>
                            </select>
                        </div> --}}
                        <!-- Submit button-->
                        <button class="btn btn-primary" type="button">Add user</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
