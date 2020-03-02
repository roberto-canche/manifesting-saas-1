@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show instructor
    </h1>
    <br>
    <a href='{!!url("instructor")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Instructor Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$instructor->name!!}</td>
            </tr>
            <tr>
                <td> <b>email</b> </td>
                <td>{!!$instructor->email!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection