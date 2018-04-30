<?php

namespace App\Http\Controllers;

use App\Joboffer;
use Illuminate\Http\Request;

class JobofferController extends Controller
{

     public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joboffers = Joboffer::All();

        //return a view and pass in the above variable
        return view('joboffers.index')->withJoboffers($joboffers);
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
     * @param  \App\Joboffer  $joboffer
     * @return \Illuminate\Http\Response
     */
    public function show(Joboffer $joboffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Joboffer  $joboffer
     * @return \Illuminate\Http\Response
     */
    public function edit(Joboffer $joboffer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Joboffer  $joboffer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joboffer $joboffer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Joboffer  $joboffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joboffer $joboffer)
    {
        //
    }
}
