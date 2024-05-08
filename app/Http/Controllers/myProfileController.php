<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class myProfileController extends Controller
{
    public function myProfile(){
        if(Auth::user()->role=="admin"){
            return view('admin.users.adminProfile');
        }
        else {

            return view('index');

        }
       
    }
}
