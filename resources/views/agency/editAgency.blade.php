@extends('layouts.app')
@section('content')

    <body style="background-color: rgb(255,247,208);">
    <form action="{{ route('agency.update', $agency) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="container" style="padding: 20px 55px;">
            <h1>Edit Agency</h1>
            <div class="form-group"><label>Name</label>
                <input class="form-control" type="text" name="name_agency" value="{{ $agency->name_agency }}"></div>
            <div class="form-group"><label>ceo</label>
                <input class="form-control" type="text" name="ceo_agency" value="{{ $agency->ceo_agency }}"></div>
            <div class="form-group"><label>phone</label>
                <input class="form-control" type="text" name="phone_agency" value="{{ $agency->phone_agency }}"></div>

             <div class="form-group"><label>email</label>
                <input class="form-control" type="text" name="email_agency" value="{{ $agency->email_agency }}"></div>
            <div class="form-group"><label>founded</label>
                <input class="form-control" type="date" name="founded_agency" value="{{ $agency->founded_agency }}"></div>
             <button
                class="btn btn-primary" type="submit" style="background-color: rgb(221,177,226);">Submit</button>
        </div>
    </form>
    </body>
@endsection
