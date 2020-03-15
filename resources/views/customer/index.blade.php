@extends('layouts.manifesting.app', ['pageSlug' => 'dashboard'])
@section('title','Index')
@section('content')
<section class="content">
    <h1>
        Customer Index
    </h1>
    <a href='{!!url("customer")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <!--<div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="http://localhost:8000/agent">Agent</a></li>
            <li><a href="http://localhost:8000/instructor">Instructor</a></li>
            <li><a href="http://localhost:8000/jump_type">Jump_type</a></li>
            <li><a href="http://localhost:8000/transport_type">Transport_type</a></li>
        </ul>
    </div>-->
    <br>
    
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>email</th>
            <th>weight</th>
            <th>ID_type</th>
            <th>name</th>
            <th>email</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>name</th>
            <th>email</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>name</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>name</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($customers as $customer) 
            <tr>
                <td>{!!$customer->name!!}</td>
                <td>{!!$customer->email!!}</td>
                <td>{!!$customer->weight!!}</td>
                <td>{!!$customer->ID_type!!}</td>
                <td>{!!$customer->agent->name!!}</td>
                <td>{!!$customer->agent->email!!}</td>
                <td>{!!$customer->agent->created_at!!}</td>
                <td>{!!$customer->agent->updated_at!!}</td>
                <td>{!!$customer->instructor->name!!}</td>
                <td>{!!$customer->instructor->email!!}</td>
                <td>{!!$customer->instructor->created_at!!}</td>
                <td>{!!$customer->instructor->updated_at!!}</td>
                <td>{!!$customer->jump_type->name!!}</td>
                <td>{!!$customer->jump_type->created_at!!}</td>
                <td>{!!$customer->jump_type->updated_at!!}</td>
                <td>{!!$customer->transport_type->name!!}</td>
                <td>{!!$customer->transport_type->created_at!!}</td>
                <td>{!!$customer->transport_type->updated_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/customer/{!!$customer->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/customer/{!!$customer->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/customer/{!!$customer->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $customers->render() !!}

</section>
@endsection