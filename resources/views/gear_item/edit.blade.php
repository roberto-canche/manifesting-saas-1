@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit gear_item
    </h1>
    <a href="{!!url('gear_item')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Gear_item Index</a>
    <br>
    <form method = 'POST' action = '{!! url("gear_item")!!}/{!!$gear_item->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$gear_item->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="SN">SN</label>
            <input id="SN" name = "SN" type="text" class="form-control" value="{!!$gear_item->
            SN!!}"> 
        </div>
        <div class="form-group">
            <label for="whereabouts">whereabouts</label>
            <input id="whereabouts" name = "whereabouts" type="text" class="form-control" value="{!!$gear_item->
            whereabouts!!}"> 
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input id="Description" name = "Description" type="text" class="form-control" value="{!!$gear_item->
            Description!!}"> 
        </div>
        <div class="form-group">
            <label for="notes">notes</label>
            <input id="notes" name = "notes" type="text" class="form-control" value="{!!$gear_item->
            notes!!}"> 
        </div>
        <div class="form-group">
            <label for="manufactured_at">manufactured_at</label>
            <input id="manufactured_at" name = "manufactured_at" type="text" class="form-control" value="{!!$gear_item->
            manufactured_at!!}"> 
        </div>
        <div class="form-group">
            <label for="inherit_cycles">inherit_cycles</label>
            <input id="inherit_cycles" name = "inherit_cycles" type="text" class="form-control" value="{!!$gear_item->
            inherit_cycles!!}"> 
        </div>
        <div class="form-group">
            <label for="serviced_by_cycle">serviced_by_cycle</label>
            <input id="serviced_by_cycle" name = "serviced_by_cycle" type="text" class="form-control" value="{!!$gear_item->
            serviced_by_cycle!!}"> 
        </div>
        <div class="form-group">
            <label for="due_cycles">due_cycles</label>
            <input id="due_cycles" name = "due_cycles" type="text" class="form-control" value="{!!$gear_item->
            due_cycles!!}"> 
        </div>
        <div class="form-group">
            <label for="due_date">due_date</label>
            <input id="due_date" name = "due_date" type="text" class="form-control" value="{!!$gear_item->
            due_date!!}"> 
        </div>
        <div class="form-group">
            <label>items Select</label>
            <select name = 'item_id' class = "form-control">
                @foreach($items as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>gear_sets Select</label>
            <select name = 'gear_set_id' class = "form-control">
                @foreach($gear_sets as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection