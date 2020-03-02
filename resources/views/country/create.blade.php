@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create country
    </h1>
    <a href="{!!url('country')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Country Index</a>
    <br>
    <form method = 'POST' action = '{!!url("country")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="code">code</label>
            <input id="code" name = "code" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection