@extends('panel.layouts.app')
@section('title', 'Person List')
@section('subtitle', 'List of Persons')
@section('content')

    <!-- Main page content-->

    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Person Details</span><a href="{{ route('persons.create') }}"><button
                            class="btn btn-success">Create</button></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">S No.</th>
                                <th scope="col">Person Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($persons as $person)
                                <tr>
                                    <th scope="row">{{ $person->id }}</th>
                                    <td>Image</td>
                                    <td>{{ $person->first_name }}
                                        @if ($person->middle_name)
                                            {{ $person->middle_name }}
                                        @endif
                                        {{ $person->last_name }}
                                    </td>
                                    <td>{{ $person->address }}</td>
                                    <td>{{ $person->contact_number }}</td>
                                    <td>{{ $person->email }}</td>
                                    <td><a href="{{ route('persons.edit', $person->id) }}"><button type="button"
                                                class="btn btn-primary">Edit</button></a>
                                        <form action="{{ route('persons.destroy', $person->id) }}" method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this person?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                    </table>

                </div>
            </div>
        </div>
    </div>




@endsection
@section('page-scripts')
    <script>
        var person_image = document.getElementById('person_image');
        person_image.addEventListener('change', function(e) {
            var reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('preview_image').src = event.target.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    </script>

@endsection
