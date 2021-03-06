<?php

namespace App\Http\Controllers;

use App\Models\agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agency = agency::all();
        return view('agency.index', compact('agency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $agency = agency::all();
         return view('agency.addAgency', compact('agency'));
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
        agency::create($request->all());
        return redirect()->route('agency.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function show(agency $agency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function edit(agency $agency)
    {
        //
       return view('agency.editAgency', compact('agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agency $agency)
    {
        //
        $agency->update($request->all());
         return redirect()->route('agency.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy(agency $agency)
    {
        //
         $agency->delete();
         return redirect()->route('agency.index');
    }
}
