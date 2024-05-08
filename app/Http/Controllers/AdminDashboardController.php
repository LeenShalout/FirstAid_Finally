<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MyCase;
use App\Models\Blog;
use App\Models\Workshop;
use Illuminate\Support\Facades\Auth;
class AdminDashboardController extends Controller
{
    public function dashboard(){
// dd(Auth::user()->role);
$user = Auth::user();
if(isset($user) && $user->role == "admin") {

    $userCount=User::all()->count();
    $casesCount=MyCase::all()->count();
    $blogsCount=Blog::all()->count();
    $workshopCount=Workshop::all()->count();


    return view('admin.dashboard',['userCount'=>$userCount,'casesCount'=>$casesCount,'blogsCount'=>$blogsCount,'workshopCount'=>$workshopCount]);
} 
elseif(isset($user) && $user->role == "user"){
    return abort('403');
}

else {
    return redirect()->route('adminLogin');
}

    //     if (Auth::check()) {
    //     $userId = auth()->id();
    //     $visitor = User::find($userId);
    //     if ($visitor) {
    //     $visitorsNum = $visitor->id;
    //     return view('admin.dashboard',['visitorsNum' => $visitorsNum]);
    //     }
    //     else {
    //         return redirect()->route('login')->with('error', 'User not found.');
    //     }
    // }
    //     else{
    //         return redirect()->route('login')->with('error', 'Please log in to access this page.');
    //     }


         // return view('admin.dashboard');
    }
   
}
