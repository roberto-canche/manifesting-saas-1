@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show gear_item
    </h1>
    <br>
    <a href='{!!url("gear_item")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Gear_item Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$gear_item->name!!}</td>
            </tr>
            <tr>
                <td> <b>SN</b> </td>
                <td>{!!$gear_item->SN!!}</td>
            </tr>
            <tr>
                <td> <b>whereabouts</b> </td>
                <td>{!!$gear_item->whereabouts!!}</td>
            </tr>
            <tr>
                <td> <b>Description</b> </td>
                <td>{!!$gear_item->Description!!}</td>
            </tr>
            <tr>
                <td> <b>notes</b> </td>
                <td>{!!$gear_item->notes!!}</td>
            </tr>
            <tr>
                <td> <b>manufactured_at</b> </td>
                <td>{!!$gear_item->manufactured_at!!}</td>
            </tr>
            <tr>
                <td> <b>inherit_cycles</b> </td>
                <td>{!!$gear_item->inherit_cycles!!}</td>
            </tr>
            <tr>
                <td> <b>serviced_by_cycle</b> </td>
                <td>{!!$gear_item->serviced_by_cycle!!}</td>
            </tr>
            <tr>
                <td> <b>due_cycles</b> </td>
                <td>{!!$gear_item->due_cycles!!}</td>
            </tr>
            <tr>
                <td> <b>due_date</b> </td>
                <td>{!!$gear_item->due_date!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$gear_item->item->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$gear_item->gear_set->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>service_status : </i></b>
                </td>
                <td>{!!$gear_item->gear_set->service_status!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection