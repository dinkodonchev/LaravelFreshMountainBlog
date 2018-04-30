<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Joboffer;
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
    public function index(Request $requestindex)
    {
        $candidates = Candidate::all();

        return view('candidates.index')->withCandidates($candidates);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $candidates = Candidate::all();
        $joboffers = Joboffer::all();

        $boolSelected = false;
        foreach ($candidates as $candidate) {
             if($candidate->status == 'selected'){
            $boolSelected = true;
            }
        }

        return view('candidates.create')->withCandidates($candidates)->withJoboffers($joboffers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //validate the data - ToDo later
        
        //store in the database
        $candidate = new Candidate;

        $candidate->name = $request->name;
        $candidate->status = $request->status;

        $boolSelected = false;

        if($candidate->status == 'selected'){
            $boolSelected = true;
        }

        $candidate->experience = $request->experience;

/*
        $arrInput = $request->input('joboffer');
        for($i = 0; $i < count($arrInput); $i++){
            if(is_array($arrInput) && $arrInput[$i] != "")
                $candidate->job_id = $arrInput[$i];
        }
*/

        $candidate->save();

        $candidate->offer()->sync($request->joboffer, false);

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
    public function show($id)
    {
        $candidate = Candidate::find($id);
        return view('candidates.show')->withCandidate($candidate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $candidate = Candidate::find($id);
        $joboffers = Joboffer::all();

        
        //return the view and pass that info in the var we previously created
        return view('candidates.edit')->withCandidate($candidate)->withJoboffers($joboffers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
    public function destroy($id)
    {
        $candidate = Candidate::find($id);

        $candidate->delete();

        Session::flash('success', 'The candidate was successfully deleted.');
        return redirect()->route('candidates.index');
    }
}
