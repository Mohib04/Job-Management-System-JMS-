<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserLogOut extends Controller
{
    //

    function logOut(){
        Auth::logout();
        return redirect()->route('login')->with('status', 'Logout Successfully!!');
    }
}
