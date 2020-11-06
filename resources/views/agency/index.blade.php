@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Agency</h1>
        <a class="btn btn-primary" role="button" href="{{ route('agency.create') }}" style="background-color: rgb(221,177,226);">Add Agency</a>
        <div class="table-responsive" style="background-color: rgba(255,247,208,0.97);">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Ceo</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Founded</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($agency as $agency)
                <tr>
{{--                    <td>test</td>--}}
{{--                    <td>test</td>--}}
{{--                    <td>test</td>--}}
{{--                    <td>test</td>--}}
{{--                    <td>test</td>--}}

                    <td>{{ $agency->name_agency }}</td>
                    <td>{{ $agency->ceo_agency }}</td>
                    <td>{{ $agency->phone_agency }}</td>
                    <td>{{ $agency->email_agency }}</td>
                    <td>{{ $agency->founded_agency }}</td>
                    <td><form action="{{ route('agency.edit', $agency) }}" >
                            <button class="btn btn-secondary" type="submit"  style="margin: 0px 12px;">Edit</button>
                        </form>
                        <form action="{{ route('agency.destroy', $agency) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
