<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gear_item;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Item;


use App\Gear_set;


/**
 * Class Gear_itemController.
 *
 * @author  The scaffold-interface created at 2020-02-28 07:15:44pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Gear_itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - gear_item';
        $gear_items = Gear_item::paginate(6);
        return view('gear_item.index',compact('gear_items','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - gear_item';
        
        $items = Item::all()->pluck('name','id');
        
        $gear_sets = Gear_set::all()->pluck('name','id');
        
        return view('gear_item.create',compact('title','items' , 'gear_sets'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gear_item = new Gear_item();

        
        $gear_item->name = $request->name;

        
        $gear_item->SN = $request->SN;

        
        $gear_item->whereabouts = $request->whereabouts;

        
        $gear_item->Description = $request->Description;

        
        $gear_item->notes = $request->notes;

        
        $gear_item->manufactured_at = $request->manufactured_at;

        
        $gear_item->inherit_cycles = $request->inherit_cycles;

        
        $gear_item->serviced_by_cycle = $request->serviced_by_cycle;

        
        $gear_item->due_cycles = $request->due_cycles;

        
        $gear_item->due_date = $request->due_date;

        
        
        $gear_item->item_id = $request->item_id;

        
        $gear_item->gear_set_id = $request->gear_set_id;

        
        $gear_item->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new gear_item has been created !!']);

        return redirect('gear_item');
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
        $title = 'Show - gear_item';

        if($request->ajax())
        {
            return URL::to('gear_item/'.$id);
        }

        $gear_item = Gear_item::findOrfail($id);
        return view('gear_item.show',compact('title','gear_item'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - gear_item';
        if($request->ajax())
        {
            return URL::to('gear_item/'. $id . '/edit');
        }

        
        $items = Item::all()->pluck('name','id');

        
        $gear_sets = Gear_set::all()->pluck('name','id');

        
        $gear_item = Gear_item::findOrfail($id);
        return view('gear_item.edit',compact('title','gear_item' ,'items', 'gear_sets' ) );
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
        $gear_item = Gear_item::findOrfail($id);
    	
        $gear_item->name = $request->name;
        
        $gear_item->SN = $request->SN;
        
        $gear_item->whereabouts = $request->whereabouts;
        
        $gear_item->Description = $request->Description;
        
        $gear_item->notes = $request->notes;
        
        $gear_item->manufactured_at = $request->manufactured_at;
        
        $gear_item->inherit_cycles = $request->inherit_cycles;
        
        $gear_item->serviced_by_cycle = $request->serviced_by_cycle;
        
        $gear_item->due_cycles = $request->due_cycles;
        
        $gear_item->due_date = $request->due_date;
        
        
        $gear_item->item_id = $request->item_id;

        
        $gear_item->gear_set_id = $request->gear_set_id;

        
        $gear_item->save();

        return redirect('gear_item');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/gear_item/'. $id . '/delete');

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
     	$gear_item = Gear_item::findOrfail($id);
     	$gear_item->delete();
        return URL::to('gear_item');
    }
}
