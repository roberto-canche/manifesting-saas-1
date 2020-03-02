@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show country
    </h1>
    <br>
    <a href='{!!url("country")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Country Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$country->name!!}</td>
            </tr>
            <tr>
                <td> <b>code</b> </td>
                <td>{!!$country->code!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection