@extends('layouts.manifesting.app', ['pageSlug' => 'dashboard'])
@section('title','Index')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Dropzone Gear Sets</h4>
                        <!--<p class="card-category"> Here is a subtitle for this table</p>-->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th></th>
                                    <th>Name</th>
                                    <th>Service Status</th>
                                    <th>Date Status</th>
                                    <th>Cycle Status</th>
                                    <th>Inherit Cycles</th>
                                    <th>Serial Number</th>
                                    <th>Whereabouts</th>
                                    <th>Cycle count</th>
                                    <th>Actions</th>
                                </thead>
                                <tbody>
                                    <tr>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>
        Gear Index
    </h1>
    <a href='{!!url("gear")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($gears as $gear) 
            <tr>
                <td>{!!$gear->name!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/gear/{!!$gear->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/gear/{!!$gear->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/gear/{!!$gear->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $gears->render() !!}

</section>
@endsection