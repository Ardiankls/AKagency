<?php

namespace App\Http\Controllers;

use App\Models\idol;
use Illuminate\Http\Request;
use App\Models\agency;

class IdolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $idol = idol::all();
        return view('idol.index', compact('idol'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agencies = agency::all();
                return view('idol.addIdol', compact('agencies'));

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
             idol::create($request->all());
             return redirect()->route('idol.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\idol  $idol
     * @return \Illuminate\Http\Response
     */
    public function show(idol $idol)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\idol  $idol
     * @return \Illuminate\Http\Response
     */
    public function edit(idol $idol)
    {
          $agencies = agency::all();
          return view('idol.editIdol', compact('agencies', 'idol'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\idol  $idol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, idol $idol)
    {
        //
         $idol->update($request->all());
         return redirect()->route('idol.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\idol  $idol
     * @return \Illuminate\Http\Response
     */
    public function destroy(idol $idol)
    {
        //
        $idol->delete();
        return redirect()->route('idol.index');
    }
}
