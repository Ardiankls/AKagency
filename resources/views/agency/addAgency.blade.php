@extends('layouts.app')
@section('content')

    <body style="background-color: rgb(255,247,208);">
    <form action="{{ route('agency.store') }}" method="post">
        @csrf
        <div class="container" style="padding: 20px 55px;">
            <h1>Add Agency</h1>
            <div class="form-group"><label>Name</label><input class="form-control" type="text" name="name_agency" required ></div>
            <div class="form-group"><label>Ceo</label><input class="form-control" type="text" name="ceo_agency" required></div>
            <div class="form-group"><label>Phone</label><input class="form-control" type="text" name="phone_agency" required></div>
            <div class="form-group"><label>Email</label><input class="form-control" type="text" name="email_agency" required></div>
            <div class="form-group"><label>Founded</label><input class="form-control" type="date" name="founded_agency" required></div>
            <button
                class="btn btn-primary" type="submit" style="background-color: rgb(221,177,226);">Submit</button>
        </div>
    </form>
    </body>
@endsection
