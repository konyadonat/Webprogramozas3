<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Grape;
use App\Models\Wine;
use App\Models\WineType;
use Illuminate\Http\Request;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wine = Wine::orderBy('id')->get();
        $winetypes = WineType::orderBy('id')->get();
        return view('wine.index',with(['wine'=> $wine,'winetypes'=>$winetypes]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grapes = Grape::orderBy('type')->get();
        $winetypes = WineType::orderBy('type')->get();

        return view('wine.create')->with([
            'grapes' => $grapes,
            'winetypes' => $winetypes
        ]);
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
            'name' => 'required|min:4',
            'grape_id' => 'required|exists:grapes,id',
            'vintage' => 'required',
            'winetypes_id' => 'required|exists:winetypes,id'
        ]);
        if(Wine::where(['name'=> $request->name,'grape_id'=> $request->grape_id,
                        'vintage' => $request->vintage,'winetypes_id' => $request->winetypes_id])->exists())
        {
            return redirect()->route('wine.create')
                ->with('error',__('This exact kind of wine is already present!'));
        }
        $wine = Auth::user()->wines()->create($request->except('_token'));
        //$wine = $user -> wines()->create($request->except('_token'));
        
        return redirect()
            ->route('wine.details',$wine)
            ->with('success',__('Wine added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        return view('wine.show')->with(compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        $grapes = Grape::orderBy('type')->get();
        $user = Auth::user();
        $winetypes = WineType::orderBy('type')->get();
        return view('wine.edit')->with(['wine' => $wine,
                                        'grapes' => $grapes,
                                        'user' => $user,
                                        'winetypes' => $winetypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wine $wine)
    {
        $request->validate([
            'name' => 'required|min:4',
            'grape_id' => 'required|exists:grapes,id',
            'vintage' => 'required',
            'winetypes_id' => 'required|exists:winetypes,id'
        ]);
        if(Wine::where(['name'=> $request->name,'grape_id'=> $request->grape_id,
                        'vintage' => $request->vintage,'winetypes_id' => $request->winetypes_id])->exists())
        {
            return redirect()->route('wine.create')
                ->with('error',__('This exact kind of wine is already present!'));
        }

        $wine->update($request->all());
        return redirect()->route('wine.edit',$wine)->with('success',__('Wine updated successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();

        return redirect()->route('wine.index')->with('success',__($wine->name.' has been deleted!'));
    }
}
