<?php

namespace App\Http\Controllers;

use App\Gear;
use App\Http\Resources\GearResource;
use Illuminate\Http\Request;

class GearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$title = 'Index - gear';
        //$gears = Gear::paginate(6);
        //return view('gear.index', compact('gears', 'title'));
        //$this->authorize('viewAny', Gear::class);
        return GearResource::collection(Gear::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function show(Gear $gear)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gear $gear)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gear $gear)
    {
        //
    }
}
