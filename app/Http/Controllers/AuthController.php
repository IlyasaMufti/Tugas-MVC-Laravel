<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function form(){
   	return view ('form');
   }

   public function welcome(){
   	return view ('welcome');
   }

   public function sapa(Request $request){
   	$nama1 = $request["nama1"];
   	return view ('welcome', ["nama" => $nama1]);
   }
}
