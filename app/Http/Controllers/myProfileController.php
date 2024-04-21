<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myProfileController extends Controller
{
    public function myProfile(){
        return view('admin.myProfile');
    }
}
