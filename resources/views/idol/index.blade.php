@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Idol</h1>
        <a class="btn btn-primary" role="button" href="{{ route('idol.create') }}" style="background-color: rgb(221,177,226);">Add Idol</a>
        <div class="table-responsive" style="background-color: rgba(255,247,208,0.97);">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Speciality</th>
                    <th>Agency</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($idol as $idol)
                <tr>

                    <td>{{ $idol->name_idol }}</td>
                    <td>{{ $idol->age_idol }}</td>
                    <td>{{ $idol->gender_idol }}</td>
                    <td>{{ $idol->phone_idol }}</td>
                    <td>{{ $idol->speciality_idol }}</td>
                    <td>{{ $idol->agency->name_agency }}</td>
                    <td><form action="{{ route('idol.edit', $idol) }}" >
                        <button class="btn btn-secondary" type="submit"  style="margin: 0px 12px;">Edit</button>
                        </form>
                        <form action="{{ route('idol.destroy', $idol) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
