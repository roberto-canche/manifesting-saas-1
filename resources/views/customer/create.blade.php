@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create customer
    </h1>
    <a href="{!!url('customer')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Customer Index</a>
    <br>
    <form method = 'POST' action = '{!!url("customer")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="weight">weight</label>
            <input id="weight" name = "weight" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ID_type">ID_type</label>
            <input id="ID_type" name = "ID_type" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>agents Select</label>
            <select name = 'agent_id' class = 'form-control'>
                @foreach($agents as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>instructors Select</label>
            <select name = 'instructor_id' class = 'form-control'>
                @foreach($instructors as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>jump_types Select</label>
            <select name = 'jump_type_id' class = 'form-control'>
                @foreach($jump_types as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>transport_types Select</label>
            <select name = 'transport_type_id' class = 'form-control'>
                @foreach($transport_types as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection