<?php

namespace App\HTTP\Controllers;

class PagesController extends Controller{

	public function getIndex(){
		return view('pages/welcome');
		#process variable data to params 
		#talk to the model
		#receive from the model
		#compile or process data from the model if needed
		#pass that data to the correct view
	}

	public function getAbout(){
		$first = "Dinyo";
		$last = "Donchev";
		$fullname = $first . " " . $last;
		$email = "dinyo.donchev@abv.bg";
		$data = []; 
		$data['fullname'] = $fullname;
		$data['email'] = $email;


		return view('pages/about')->withData($data);
	}

	public function getContact(){
		return view('pages/contact');
	}
}