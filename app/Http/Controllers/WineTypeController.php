<?php

namespace App\Http\Controllers;

use App\Models\WineType;
use Illuminate\Http\Request;

class WineTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $winetypes = WineType::orderBy('id')->get();
        return view('winetype.index',['winetypes' => $winetypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('winetype.create');
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
            'type' => 'required|min:4|unique:winetypes'
        ]);
        $winetype = WineType::create($request->all());
        return redirect()->route('winetype.index',$winetype)
                            -> with('success',__('Wine type added successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WineType  $wineType
     * @return \Illuminate\Http\Response
     */
    public function show(WineType $winetype)
    {
        return view('winetype.show')->with(["winetype" => $winetype]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WineType  $wineType
     * @return \Illuminate\Http\Response
     */
    public function edit(WineType $winetype)
    {
        return view('winetype.edit')->with(compact('winetype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WineType  $wineType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WineType $winetype)
    {
        $request->validate([
            'type' => 'required|min:4|unique:winetypes'
        ]);

        $winetype->update($request->all());

        return redirect()->route('winetype.edit',$winetype)->with('success',__('Winetype updated successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WineType  $wineType
     * @return \Illuminate\Http\Response
     */
    public function destroy(WineType $wineType)
    {
        //
    }
}
