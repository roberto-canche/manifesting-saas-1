<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Agent;


use App\Instructor;


use App\Jump_type;


use App\Transport_type;

use mikehaertl\pdftk\Pdf; 
/**
 * Class CustomerController.
 *
 * @author  The scaffold-interface created at 2020-02-28 06:09:26pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - customer';
        $customers = Customer::paginate(6);
        return view('customer.index', compact('customers','title'));
    }

    public function test()
    {
        $title = 'Index - customer';
        $customers = Customer::paginate(6);
        return view('customer.index2', compact('customers','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - customer';
        
        $agents = Agent::all()->pluck('name','id');
        
        $instructors = Instructor::all()->pluck('name','id');
        
        $jump_types = Jump_type::all()->pluck('name','id');
        
        $transport_types = Transport_type::all()->pluck('name','id');
        
        return view('customer.create',compact('title','agents' , 'instructors' , 'jump_types' , 'transport_types'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        
        $customer->name = $request->name;

        
        $customer->email = $request->email;

        
        $customer->weight = $request->weight;

        
        $customer->ID_type = $request->ID_type;

        
        
        $customer->agent_id = $request->agent_id;

        
        $customer->instructor_id = $request->instructor_id;

        
        $customer->jump_type_id = $request->jump_type_id;

        
        $customer->transport_type_id = $request->transport_type_id;

        
        $customer->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new customer has been created !!']);

        return redirect('customer');
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
        $title = 'Show - customer';

        if($request->ajax())
        {
            return URL::to('customer/'.$id);
        }

        $customer = Customer::findOrfail($id);
        return view('customer.show',compact('title','customer'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - customer';
        if($request->ajax())
        {
            return URL::to('customer/'. $id . '/edit');
        }

        
        $agents = Agent::all()->pluck('name','id');

        
        $instructors = Instructor::all()->pluck('name','id');

        
        $jump_types = Jump_type::all()->pluck('name','id');

        
        $transport_types = Transport_type::all()->pluck('name','id');

        
        $customer = Customer::findOrfail($id);
        return view('customer.edit',compact('title','customer' ,'agents', 'instructors', 'jump_types', 'transport_types' ) );
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
        $customer = Customer::findOrfail($id);
    	
        $customer->name = $request->name;
        
        $customer->email = $request->email;
        
        $customer->weight = $request->weight;
        
        $customer->ID_type = $request->ID_type;
        
        
        $customer->agent_id = $request->agent_id;

        
        $customer->instructor_id = $request->instructor_id;

        
        $customer->jump_type_id = $request->jump_type_id;

        
        $customer->transport_type_id = $request->transport_type_id;

        
        $customer->save();

        return redirect('customer');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/customer/'. $id . '/delete');

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
     	$customer = Customer::findOrfail($id);
     	$customer->delete();
        return URL::to('customer');
    }


    public function fill() 
    {

    
    // Get data
    $pdf = new Pdf('digital_waiver2019.pdf');

    $pdf->fillForm([
        'Full Name'=>'sanjay',
        'Photo Identification Number (License/Passport)' => 'G14626555',
        'Sex/Gender' => "Female"

    ])
        ->needAppearances()
        ->send('dfilled.pdf');

    // Check for errors
    // if (!$pdf->send('my.pdf')) {

    //     $error = $pdf->getError();
    //     var_dump($error);
    //     echo "hola";
    // }

    
//return view('customer.fill',compact(''));

    }
}
