<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transport_type;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Transport_typeController.
 *
 * @author  The scaffold-interface created at 2020-02-28 05:47:56pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Transport_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - transport_type';
        $transport_types = Transport_type::paginate(6);
        return view('transport_type.index',compact('transport_types','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - transport_type';
        
        return view('transport_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transport_type = new Transport_type();

        
        $transport_type->name = $request->name;

        
        
        $transport_type->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new transport_type has been created !!']);

        return redirect('transport_type');
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
        $title = 'Show - transport_type';

        if($request->ajax())
        {
            return URL::to('transport_type/'.$id);
        }

        $transport_type = Transport_type::findOrfail($id);
        return view('transport_type.show',compact('title','transport_type'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - transport_type';
        if($request->ajax())
        {
            return URL::to('transport_type/'. $id . '/edit');
        }

        
        $transport_type = Transport_type::findOrfail($id);
        return view('transport_type.edit',compact('title','transport_type'  ));
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
        $transport_type = Transport_type::findOrfail($id);
    	
        $transport_type->name = $request->name;
        
        
        $transport_type->save();

        return redirect('transport_type');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/transport_type/'. $id . '/delete');

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
     	$transport_type = Transport_type::findOrfail($id);
     	$transport_type->delete();
        return URL::to('transport_type');
    }
}
