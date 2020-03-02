<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gear;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class GearController.
 *
 * @author  The scaffold-interface created at 2020-02-28 06:38:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class GearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - gear';
        $gears = Gear::paginate(6);
        return view('gear.index',compact('gears','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - gear';
        
        return view('gear.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gear = new Gear();

        
        $gear->name = $request->name;

        
        
        $gear->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new gear has been created !!']);

        return redirect('gear');
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
        $title = 'Show - gear';

        if($request->ajax())
        {
            return URL::to('gear/'.$id);
        }

        $gear = Gear::findOrfail($id);
        return view('gear.show',compact('title','gear'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - gear';
        if($request->ajax())
        {
            return URL::to('gear/'. $id . '/edit');
        }

        
        $gear = Gear::findOrfail($id);
        return view('gear.edit',compact('title','gear'  ));
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
        $gear = Gear::findOrfail($id);
    	
        $gear->name = $request->name;
        
        
        $gear->save();

        return redirect('gear');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/gear/'. $id . '/delete');

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
     	$gear = Gear::findOrfail($id);
     	$gear->delete();
        return URL::to('gear');
    }
}
