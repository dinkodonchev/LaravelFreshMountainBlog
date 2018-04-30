<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use Session;

class CandidateController extends Controller
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
        $candidates = Candidate::All();
        return view('candidates.index')->withCandidates($candidates);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidates = Candidate::All();
        return view('candidates.create')->withCandidates($candidates);
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
        $candidate = new Candidate;

        $candidate->name = $request->name;
        $candidate->status = $request->status;
        $candidate->experience = $request->experience;

        $candidate->save();

        Session::flash('success', 'The candidate was successfully saved!');

        //redirect to another page or action
        return redirect()->route('candidates.show', $candidate->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        $candidate = Candidate::find($id);
        return view('candidates.show')->withCandidates($candidate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        $candidate = Candidate::find($id);
        //return the view and pass that info in the var we previously created
        return view('candidates.edit')->withCandidates($candidate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        $candidate = Candidate::find($id);

        $candidate->name = $request->input('name');
        $candidate->status = $request->input('status');
        $candidate->experience = $request->input('experience');

        $candidate->save();

        //set flash with success message
        Session::flash('success', 'This candidate was successfully saved!');

        //redirect with flash to show request
        return redirect()->route('candidates.show', $candidate->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}