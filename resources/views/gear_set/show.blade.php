@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show gear_set
    </h1>
    <br>
    <a href='{!!url("gear_set")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Gear_set Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$gear_set->name!!}</td>
            </tr>
            <tr>
                <td> <b>service_status</b> </td>
                <td>{!!$gear_set->service_status!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$gear_set->gear->name!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection