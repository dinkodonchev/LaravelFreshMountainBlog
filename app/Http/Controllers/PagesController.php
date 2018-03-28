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
		return view('pages/about');
	}

	public function getContact(){
		return view('pages/contact');
	}
}