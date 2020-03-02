@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create jump_type
    </h1>
    <a href="{!!url('jump_type')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Jump_type Index</a>
    <br>
    <form method = 'POST' action = '{!!url("jump_type")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection