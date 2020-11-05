<?php

namespace App\Http\Controllers;

use App\Models\idol;
use Illuminate\Http\Request;

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
        //
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
        //
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
    }
}
