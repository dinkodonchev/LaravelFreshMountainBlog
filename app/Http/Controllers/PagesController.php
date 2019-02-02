<?php

namespace App\HTTP\Controllers;

use App\Post;

class PagesController extends Controller{

	public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->limit(5)->get();

		return view('pages/welcome')->withPosts($posts);
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

	public function getSandbox(){
		return view('pages/sandbox');
	}

	public function getContact(){
		return view('pages/contact');
	}
}