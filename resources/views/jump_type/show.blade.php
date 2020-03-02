@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show jump_type
    </h1>
    <br>
    <a href='{!!url("jump_type")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Jump_type Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$jump_type->name!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection