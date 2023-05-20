<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{ /*
   @return 

   */

   public function __construct()
   {
   	  $this->middleware('auth');
   }

   public function index(){


   	return view('home');
   }


}



?>