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
                    <th>Age</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Text</td>
                    <td>Text</td>
                    <td><button class="btn btn-secondary" type="button" style="margin: 0px 12px;">Edit</button><button class="btn btn-danger" type="button">Delete</button></td>
                </tr>
                <tr>
                    <td>Cell 1</td>
                    <td>Cell 2</td>
                </tr>
                <tr>
                    <td>Cell 3</td>
                    <td>Cell 4</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
