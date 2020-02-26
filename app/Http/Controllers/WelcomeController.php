<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest');
		
	}
	public function index()
	{
		return "salutare lume";
		//return view('welcome');
	}
	public function contact()
	{
		//return "conatcteaza-ma";
		return view('pages/contact');
	}
}
