<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	public function index(){
		return view('pages.index');
	}
    public function despre(){
	//return "Pagina despre noi!";--exemplu de afisare string
	$name="Fiscalitatea astazi";
	//return view('pages.despre')->with('name',$name);
	//variabila de tip array care se trimit la view
	return view('pages.despre')->with(['name'=>"vavrvar",'prenume'=>"Filimon"]);
	
	}
}
