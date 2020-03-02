@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show transport_type
    </h1>
    <form method = 'get' action = '{!!url("transport_type")!!}'>
        <button class = 'btn blue'>transport_type Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$transport_type->name!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection