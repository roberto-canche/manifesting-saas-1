@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show agent
    </h1>
    <br>
    <a href='{!!url("agent")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Agent Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$agent->name!!}</td>
            </tr>
            <tr>
                <td> <b>email</b> </td>
                <td>{!!$agent->email!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection