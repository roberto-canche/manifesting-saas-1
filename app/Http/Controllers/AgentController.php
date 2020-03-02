<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agent;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class AgentController.
 *
 * @author  The scaffold-interface created at 2020-02-28 05:44:30pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - agent';
        $agents = Agent::paginate(6);
        return view('agent.index',compact('agents','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - agent';
        
        return view('agent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agent = new Agent();

        
        $agent->name = $request->name;

        
        $agent->email = $request->email;

        
        
        $agent->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new agent has been created !!']);

        return redirect('agent');
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
        $title = 'Show - agent';

        if($request->ajax())
        {
            return URL::to('agent/'.$id);
        }

        $agent = Agent::findOrfail($id);
        return view('agent.show',compact('title','agent'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - agent';
        if($request->ajax())
        {
            return URL::to('agent/'. $id . '/edit');
        }

        
        $agent = Agent::findOrfail($id);
        return view('agent.edit',compact('title','agent'  ));
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
        $agent = Agent::findOrfail($id);
    	
        $agent->name = $request->name;
        
        $agent->email = $request->email;
        
        
        $agent->save();

        return redirect('agent');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/agent/'. $id . '/delete');

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
     	$agent = Agent::findOrfail($id);
     	$agent->delete();
        return URL::to('agent');
    }
}
