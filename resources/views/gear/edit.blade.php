@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit gear
    </h1>
    <a href="{!!url('gear')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Gear Index</a>
    <br>
    <form method = 'POST' action = '{!! url("gear")!!}/{!!$gear->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$gear->
            name!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection