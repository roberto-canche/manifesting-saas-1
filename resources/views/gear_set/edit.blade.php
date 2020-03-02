@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit gear_set
    </h1>
    <a href="{!!url('gear_set')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Gear_set Index</a>
    <br>
    <form method = 'POST' action = '{!! url("gear_set")!!}/{!!$gear_set->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$gear_set->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="service_status">service_status</label>
            <input id="service_status" name = "service_status" type="text" class="form-control" value="{!!$gear_set->
            service_status!!}"> 
        </div>
        <div class="form-group">
            <label>gears Select</label>
            <select name = 'gear_id' class = "form-control">
                @foreach($gears as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection