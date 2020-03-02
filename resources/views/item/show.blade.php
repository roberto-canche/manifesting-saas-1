@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show item
    </h1>
    <br>
    <a href='{!!url("item")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Item Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$item->name!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection