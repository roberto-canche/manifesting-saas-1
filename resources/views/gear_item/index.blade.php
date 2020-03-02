@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Gear_item Index
    </h1>
    <a href='{!!url("gear_item")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="http://localhost:8000/item">Item</a></li>
            <li><a href="http://localhost:8000/gear_set">Gear_set</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>SN</th>
            <th>whereabouts</th>
            <th>Description</th>
            <th>notes</th>
            <th>manufactured_at</th>
            <th>inherit_cycles</th>
            <th>serviced_by_cycle</th>
            <th>due_cycles</th>
            <th>due_date</th>
            <th>name</th>
            <th>name</th>
            <th>service_status</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($gear_items as $gear_item) 
            <tr>
                <td>{!!$gear_item->name!!}</td>
                <td>{!!$gear_item->SN!!}</td>
                <td>{!!$gear_item->whereabouts!!}</td>
                <td>{!!$gear_item->Description!!}</td>
                <td>{!!$gear_item->notes!!}</td>
                <td>{!!$gear_item->manufactured_at!!}</td>
                <td>{!!$gear_item->inherit_cycles!!}</td>
                <td>{!!$gear_item->serviced_by_cycle!!}</td>
                <td>{!!$gear_item->due_cycles!!}</td>
                <td>{!!$gear_item->due_date!!}</td>
                <td>{!!$gear_item->item->name!!}</td>
                <td>{!!$gear_item->gear_set->name!!}</td>
                <td>{!!$gear_item->gear_set->service_status!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/gear_item/{!!$gear_item->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/gear_item/{!!$gear_item->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/gear_item/{!!$gear_item->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $gear_items->render() !!}

</section>
@endsection