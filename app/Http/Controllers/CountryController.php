<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class CountryController.
 *
 * @author  The scaffold-interface created at 2020-02-28 05:48:38pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - country';
        $countries = Country::paginate(6);
        return view('country.index',compact('countries','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - country';
        
        return view('country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = new Country();

        
        $country->name = $request->name;

        
        $country->code = $request->code;

        
        
        $country->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new country has been created !!']);

        return redirect('country');
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
        $title = 'Show - country';

        if($request->ajax())
        {
            return URL::to('country/'.$id);
        }

        $country = Country::findOrfail($id);
        return view('country.show',compact('title','country'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - country';
        if($request->ajax())
        {
            return URL::to('country/'. $id . '/edit');
        }

        
        $country = Country::findOrfail($id);
        return view('country.edit',compact('title','country'  ));
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
        $country = Country::findOrfail($id);
    	
        $country->name = $request->name;
        
        $country->code = $request->code;
        
        
        $country->save();

        return redirect('country');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/country/'. $id . '/delete');

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
     	$country = Country::findOrfail($id);
     	$country->delete();
        return URL::to('country');
    }
}
