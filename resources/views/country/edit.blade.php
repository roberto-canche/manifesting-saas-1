@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit country
    </h1>
    <a href="{!!url('country')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Country Index</a>
    <br>
    <form method = 'POST' action = '{!! url("country")!!}/{!!$country->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$country->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="code">code</label>
            <input id="code" name = "code" type="text" class="form-control" value="{!!$country->
            code!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection