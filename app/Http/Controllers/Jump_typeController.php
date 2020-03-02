<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jump_type;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Jump_typeController.
 *
 * @author  The scaffold-interface created at 2020-02-28 05:46:31pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Jump_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - jump_type';
        $jump_types = Jump_type::paginate(6);
        return view('jump_type.index',compact('jump_types','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - jump_type';
        
        return view('jump_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jump_type = new Jump_type();

        
        $jump_type->name = $request->name;

        
        
        $jump_type->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new jump_type has been created !!']);

        return redirect('jump_type');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - jump_type';

        if($request->ajax())
        {
            return URL::to('jump_type/'.$id);
        }

        $jump_type = Jump_type::findOrfail($id);
        return view('jump_type.show',compact('title','jump_type'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - jump_type';
        if($request->ajax())
        {
            return URL::to('jump_type/'. $id . '/edit');
        }

        
        $jump_type = Jump_type::findOrfail($id);
        return view('jump_type.edit',compact('title','jump_type'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $jump_type = Jump_type::findOrfail($id);
    	
        $jump_type->name = $request->name;
        
        
        $jump_type->save();

        return redirect('jump_type');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/jump_type/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$jump_type = Jump_type::findOrfail($id);
     	$jump_type->delete();
        return URL::to('jump_type');
    }
}
