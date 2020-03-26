<?php

namespace App\Http\Controllers;

use App\Gear;
use Illuminate\Http\Request;

class GearContrroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - gear';
        $gears = Gear::paginate(6);
        return view('gear.index', compact('gears', 'title'));
    }

    public function index_test()
    {
        $title = 'Index - gear';
        $gears = Gear::paginate(6);
        return view('gear.index2', compact('gears', 'title'));
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
