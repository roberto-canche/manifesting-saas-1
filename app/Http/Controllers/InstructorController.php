<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Instructor;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class InstructorController.
 *
 * @author  The scaffold-interface created at 2020-02-28 05:45:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - instructor';
        $instructors = Instructor::paginate(6);
        return view('instructor.index',compact('instructors','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - instructor';
        
        return view('instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instructor = new Instructor();

        
        $instructor->name = $request->name;

        
        $instructor->email = $request->email;

        
        
        $instructor->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new instructor has been created !!']);

        return redirect('instructor');
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
        $title = 'Show - instructor';

        if($request->ajax())
        {
            return URL::to('instructor/'.$id);
        }

        $instructor = Instructor::findOrfail($id);
        return view('instructor.show',compact('title','instructor'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - instructor';
        if($request->ajax())
        {
            return URL::to('instructor/'. $id . '/edit');
        }

        
        $instructor = Instructor::findOrfail($id);
        return view('instructor.edit',compact('title','instructor'  ));
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
        $instructor = Instructor::findOrfail($id);
    	
        $instructor->name = $request->name;
        
        $instructor->email = $request->email;
        
        
        $instructor->save();

        return redirect('instructor');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/instructor/'. $id . '/delete');

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
     	$instructor = Instructor::findOrfail($id);
     	$instructor->delete();
        return URL::to('instructor');
    }
}
