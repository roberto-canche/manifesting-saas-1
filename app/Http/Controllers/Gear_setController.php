<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gear_set;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Gear;


/**
 * Class Gear_setController.
 *
 * @author  The scaffold-interface created at 2020-02-28 07:05:39pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Gear_setController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - gear_set';
        $gear_sets = Gear_set::paginate(6);
        return view('gear_set.index',compact('gear_sets','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - gear_set';
        
        $gears = Gear::all()->pluck('name','id');
        
        return view('gear_set.create',compact('title','gears'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gear_set = new Gear_set();

        
        $gear_set->name = $request->name;

        
        $gear_set->service_status = $request->service_status;

        
        
        $gear_set->gear_id = $request->gear_id;

        
        $gear_set->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new gear_set has been created !!']);

        return redirect('gear_set');
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
        $title = 'Show - gear_set';

        if($request->ajax())
        {
            return URL::to('gear_set/'.$id);
        }

        $gear_set = Gear_set::findOrfail($id);
        return view('gear_set.show',compact('title','gear_set'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - gear_set';
        if($request->ajax())
        {
            return URL::to('gear_set/'. $id . '/edit');
        }

        
        $gears = Gear::all()->pluck('name','id');

        
        $gear_set = Gear_set::findOrfail($id);
        return view('gear_set.edit',compact('title','gear_set' ,'gears' ) );
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
        $gear_set = Gear_set::findOrfail($id);
    	
        $gear_set->name = $request->name;
        
        $gear_set->service_status = $request->service_status;
        
        
        $gear_set->gear_id = $request->gear_id;

        
        $gear_set->save();

        return redirect('gear_set');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/gear_set/'. $id . '/delete');

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
     	$gear_set = Gear_set::findOrfail($id);
     	$gear_set->delete();
        return URL::to('gear_set');
    }
}
