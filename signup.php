<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class signup extends Controller {
   public function insertform() {
      return view('signup');
   }
	
   public function insert(Request $request) {
      $email = $request->input('email');
      $contact=$request->input('contact');
      $password = $request->input('password');
      $cpassword=$request->input('cpassword');
      DB::insert('insert into signup (email,contact,password,cpassword) values(?)',[$email],[$contact],[$password],[$cpassword]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/signin">Click Here</a> to go back.';
   }
}
?>