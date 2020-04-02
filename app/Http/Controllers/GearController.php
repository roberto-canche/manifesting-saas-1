<?php

namespace App\Http\Controllers;

use App\User;
use App\Gear;
use App\Http\Resources\GearResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
        return GearResource::collection(Gear::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gear = request()->user()->gears()->create($this->validateData());
        GearResource::withoutWrapping();

        return (new GearResource($gear))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function show(Gear $gear)
    {
        GearResource::withoutWrapping();
        return (new GearResource($gear));
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
        $gear->update($this->validateData());

        return (new GearResource($gear))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gear $gear)
    {
        $article->delete();
        return response([], Response::HTTP_NO_CONTENT);
    }

    public function validateData() {
        return request()->validate([
            'name' => 'required',
        ]);
    }
}
