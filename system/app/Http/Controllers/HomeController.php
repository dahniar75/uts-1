<?php 

namespace App\Http\Controllers;

 class HomeController extends Controller{


 	function Showtemplate(){
 		return view('template.base');
 	}
	function Showindex(){
 		return view('index');
 	}

 	function Showdashboard(){
 		return view('dashboard');
 	}

}
