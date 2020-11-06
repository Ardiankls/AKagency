@extends('layouts.app')
@section('content')

    <body style="background-color: rgb(255,247,208);">
    <form action="{{ route('idol.store') }}" method="post">
        @csrf
        <div class="container" style="padding: 20px 55px;">
            <h1>Add Idol</h1>
            <div class="form-group"><label>Name</label>
                <input class="form-control" type="text" name="name_idol" required></div>
            <div class="form-group"><label>Age</label>
                <input class="form-control" type="text" name="age_idol" required></div>
{{--            <div class="form-group"><label>gender</label>--}}
{{--                <input class="form-control" type="text" name="gender_idol" required></div>--}}

            <div class="form-group"><label>Gender</label>
                <select class="form-control" name="gender_idol" ><optgroup label="Choose Gender" type="text"  required>
                        <option value="Male"  selected="">Male</option><option value="Female">Female</option></optgroup></select></div>

            <div class="form-group"><label>Phone</label>
                <input class="form-control" type="text" name="phone_idol" required></div>
            <div class="form-group"><label>Speciality</label>
                <input class="form-control" type="text" name="speciality_idol" required></div>
{{--            <div class="form-group"><label>Agency</label>--}}
{{--                <input class="form-control" type="text" name="agency_idol" required></div>--}}

            <div class="form-group"><label>Agency</label>
                <select name="agency_idol" class="custom-select">
                    @foreach ($agencies as $agency)
                        <option value="{{ $agency->id }}" required>
                            {{ $agency->name_agency }} </option>
                    @endforeach
                </select>
            </div>
                <button
                class="btn btn-primary" type="submit" style="background-color: rgb(221,177,226);">Submit</button>
        </div>

    </form>
    </body>
@endsection
