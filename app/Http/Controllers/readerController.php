<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reader;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class readerController extends Controller
{
    public function login(Request $request){
    	$email=$request->email;
    	$password=md5($request->password);
    	$result=DB::table('readers')
    			   ->where('email',$email)
    			   ->where('password',$password)
    			   ->first();

     if($result){
     	Session::put('firstName',$result->firstName);
     	Session::put('id',$result->id);
     	return Redirect('/');
     }else{
     	// Session::put('message','Email or Password Invalid');
     	return Redirect('/user-login')->with('message','Email or Password Invalid');
     }
    }

    public function register(Request $request){
    	$this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phoneNumber' => 'required',
        ]);
        $reader = new reader();
        $reader->firstName = $request->firstName;
        $reader->lastName = $request->lastName;
        $reader->email = $request->email;
        $reader->password = md5($request->password);
        $reader->phoneNumber = $request->phoneNumber;
        $reader->save();
        return Redirect('/user-login');
    }
    public function logout(){
    	Session::put('firstName',null);
    	Session::put('id',null);
        session_unset();
    	return Redirect::back();
    }
}
