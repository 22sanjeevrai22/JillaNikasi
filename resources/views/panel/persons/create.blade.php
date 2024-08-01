@extends('panel.layouts.app')
@section('title', 'Metropolitian Dashboard')
@section('subtitle', 'Sadananda VDC tax toll.')
@section('content')

    <!-- Main page content-->

    <form action="{{ route('persons.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Person Details</div>
                    <div class="card-body">
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputFirstName">First Name<span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('first_name') is-invalid @enderror" id="inputFirstName"
                                    name="first_name" type="text"
                                    placeholder="Enter your first name" value="{{ old('first_name') }}" required />
                                @error('first_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="small mb-1" for="inputMiddleName">Middle Name (Nullable)</label>
                                <input
                                    class="form-control @error('middle_name') is-invalid
                                @enderror"
                                    name="middle_name" id="inputMiddleName" type="text"
                                    placeholder="Enter your middle name"  value="{{ old('middle_name') }}" />
                                @error('middle_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label class="small mb-1" for="inputLastName">Last Name<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('last_name') is-invalid
                                @enderror"
                                    name="last_name" id="inputLastName" type="text" placeholder="Enter your last name"
                                    value="{{ old('last_name') }}" required />
                                @error('last_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputAddress">Address<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('address') is-invalid
                                @enderror"
                                    id="inputAddress" type="text" name="address" placeholder="Enter your Address"
                                    value="{{ old('address') }}" required />
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputContactNumber" required>Contact Number<span
                                        class="text-danger">*</span></label>
                                <input
                                    class="form-control @error('contact_number') is-invalid
                                @enderror"
                                    name="contact_number" id="inputContactNumber" type="text"
                                    placeholder="Enter your Contact Number" value="{{ old('contact_number') }}" required />
                                @error('contact_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address(Nullable)</label>
                            <input class="form-control @error('email') is-invalid
                                @enderror"
                                name="email" id="inputEmailAddress" type="email" placeholder="Enter your email address"
                                value="{{ old('email') }}" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button class="btn btn-primary" type="submit">Add Person</button>

                    </div>
                </div>
                <!-- Profile picture card-->
            </div>
            <div class="card col-xl-4">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2"
                        src="{{ asset('assets/img/demo/user-placeholder.svg') }}" id="preview_image" alt="" />
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

                    <input type="file" name="person_image" id="person_image" accept=".jpg, .jpeg, .png" class="d-none">
                    <button class="btn btn-primary" type="button"
                        onclick="document.getElementById('person_image').click();">Upload Image</button>
                </div>
            </div>
        </div>
    </form>


    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>


@endsection
@section('page-scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var person_image = document.getElementById('person_image');
        person_image.addEventListener('change', function(e) {
            var reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('preview_image').src = event.target.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        });

        @if (session('success'))
            showToast('Success', '{{ session('success') }}');
        @endif
        @if (session('error'))
            showToast('Error', '{{ session('error') }}');
        @endif
    });

    
</script>
@endsection
