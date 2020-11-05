@extends('layouts.app')
@section('content')

    <body style="background-color: rgb(255,247,208);">
    <form>
        <div class="container" style="padding: 20px 55px;">
            <h1>Add Idol</h1>
            <div class="form-group"><label>Name</label><input class="form-control" type="text"></div>
            <div class="form-group"><label>Age</label><input class="form-control" type="text"></div>
            <div class="form-group"><label>Gender</label><select class="form-control"><optgroup label="Choose Gender"><option value="12" selected="">Male</option><option value="13">Female</option></optgroup></select></div>
            <div class="form-group"><label>Phone</label><input class="form-control" type="text"></div>
            <div class="form-group"><label>Speciality</label><input class="form-control" type="text"></div>
            <div class="form-group"><label>Agency</label><select class="form-control"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
            <button
                class="btn btn-primary" type="button" style="background-color: rgb(221,177,226);">Submit</button>
        </div>
    </form>
    </body>
@endsection
