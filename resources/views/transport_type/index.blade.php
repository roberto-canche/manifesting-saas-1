@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        transport_type Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("transport_type")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New transport_type</button>
        </form>
    </div>
    <table>
        <thead>
            <th>name</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($transport_types as $transport_type) 
            <tr>
                <td>{!!$transport_type->name!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/transport_type/{!!$transport_type->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/transport_type/{!!$transport_type->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/transport_type/{!!$transport_type->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $transport_types->render() !!}

</div>
@endsection