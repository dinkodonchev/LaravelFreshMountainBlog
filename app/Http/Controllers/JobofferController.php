<?php

namespace App\Http\Controllers;

use App\Joboffer;
use Illuminate\Http\Request;
use Session;

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
         $joboffers = Joboffer::All();
        return view('joboffers.create')->withJoboffers($joboffers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data - ToDo later
        
        //store in the database
        $joboffer = new Joboffer;

        $joboffer->name = $request->name;
        $joboffer->experience_requiered = $request->experience_requiered;

        $joboffer->save();

        Session::flash('success', 'The job offer was successfully saved!');

        //redirect to another page or action
        return redirect()->route('joboffers.show', $joboffer->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Joboffer  $joboffer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $joboffer = Joboffer::find($id);
        return view('candidates.show')->withJoboffer($joboffer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Joboffer  $joboffer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $joboffer = Joboffer::find($id);
        return view('candidates.edit')->withJoboffer($joboffer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Joboffer  $joboffer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $joboffer = Joboffer::find($id);

        $joboffer->name = $request->input('name');
        $joboffer->experience_requiered = $request->input('experience_requiered');

        $joboffer->save();

        //set flash with success message
        Session::flash('success', 'This job offer was successfully saved!');

        //redirect with flash to show request
        return redirect()->route('joboffers.show', $joboffer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Joboffer  $joboffer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $joboffer = Joboffer::find($id);

        $joboffer->delete();

        Session::flash('success', 'The job offer was successfully deleted.');
        return redirect()->route('$joboffers.index');
    }
}
