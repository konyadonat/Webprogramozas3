<?php

namespace App\Http\Controllers;

use App\Models\Grape;
use App\Models\Place;
use Illuminate\Http\Request;

class GrapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places = Place::orderBy('name')->get();
        return view('grape.create')->with(['places' => $places]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|min:4|unique:grapes,place_id',
            'place_id' => 'required|exists:places,id'
        ]);
        if(Grape::where(['type'=> $request->type,'place_id'=> $request->place_id])->exists())
        {
            return redirect()->route('grape.create')
                ->with('error',__('This exact kind of grape is already present!'));
        }
        $grape = Grape::create($request->all());
        return redirect()->route('grape.details',$grape)
                            -> with('success',__('Grape added successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grape  $grape
     * @return \Illuminate\Http\Response
     */
    public function show(Grape $grape)
    {
        return view('grape.show')->with(compact('grape'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grape  $grape
     * @return \Illuminate\Http\Response
     */
    public function edit(Grape $grape)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grape  $grape
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grape $grape)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grape  $grape
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grape $grape)
    {
        //
    }
}
