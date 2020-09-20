<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout ($user_id) {
    	
	    auth()->logout();
	    return view('welcome');
	    // redirect to homepage
	    // return redirect('/');
	}
}
