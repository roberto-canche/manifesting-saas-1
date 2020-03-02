@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit transport_type
    </h1>
    <form method = 'get' action = '{!!url("transport_type")!!}'>
        <button class = 'btn blue'>transport_type Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("transport_type")!!}/{!!$transport_type->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="name" name = "name" type="text" class="validate" value="{!!$transport_type->
            name!!}"> 
            <label for="name">name</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection