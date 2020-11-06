@extends('layouts.app')
@section('content')

    <body style="background-color: rgb(255,247,208);">
    <form action="{{ route('idol.update', $idol) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="container" style="padding: 20px 55px;">
            <h1>Edit Idol</h1>
            <div class="form-group"><label>Name</label>
                <input class="form-control" type="text" name="name_idol" value="{{ $idol->name_idol }}"></div>
            <div class="form-group"><label>Age</label>
                <input class="form-control" type="text" name="age_idol" value="{{ $idol->age_idol }}"></div>
            <div class="form-group"><label>Gender</label>
                <select class="form-control" name="gender_idol" value="{{ $idol->gender_idol }}" ><optgroup label="Choose Gender" type="text"  >
                        <option value="Male"  selected="">Male</option>
                    <option value="Female">Female</option></optgroup></select></div>

            {{--            <div class="form-group"><label>Gender</label>--}}
            {{--                <select class="form-control"><optgroup label="Choose Gender" type="text" name="gender_idol" required>--}}
            {{--                        <option value="12"  selected="">Male</option><option value="13">Female</option></optgroup></select></div>--}}
            <div class="form-group"><label>Phone</label>
                <input class="form-control" type="text" name="phone_idol" value="{{ $idol->phone_idol }}"></div>
            <div class="form-group"><label>Speciality</label>
                <input class="form-control" type="text" name="speciality_idol" value="{{ $idol->speciality_idol }}"></div>
            <div class="form-group"><label>Agency</label>
                <input class="form-control" type="text" name="agency_idol" value="{{ $idol->agency->name_agency }}" disabled></div>
            {{--            <div class="form-group"><label>Agency</label>--}}
            {{--                <select class="form-control"><optgroup label="This is a group">--}}
            {{--                        <option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>--}}
            <button
                class="btn btn-primary" type="submit" style="background-color: rgb(221,177,226);">Submit</button>
        </div>
    </form>
    </body>
@endsection
