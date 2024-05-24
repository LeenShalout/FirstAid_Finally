<?php

namespace App\Http\Controllers;

use App\Models\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\MyCase;
use App\Models\Blog;
use App\Models\Workshop;
use App\Models\Experience;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
class AdminDashboardController extends Controller
{
    public function dashboard(Request $request){
// dd(Auth::user()->role);
$user = Auth::user();
if(isset($user) && $user->role == "admin") {

    $userCount=User::where('role', '0')->count();
    $adminCount=User::where('role', '1')->count();
    $casesCount=MyCase::all()->count();
    $blogsCount=Blog::all()->count();
    $workshopCount=Workshop::all()->count();
    $experienceCount=Experience::all()->count();
    $recentlyAddedAdmins = User::where('role', 1)->latest()->take(3)->select('name','img','email')->get();
   $latestUsers=User::where('role', 0)->latest()->take(4)->select('name','img','created_at')->get();
   $activeUsers=Experience::with('user')->take(2)->get();
   $registeredCount=Registered::all()->count();
   $messages=Contact::all()->count();
   $registeredParticipants = Registered::with('workshopTitle')->take(2)->get();
   $recentMessages= Contact::take(2)->select('Name','Message')->get();



    return view('admin.dashboard',['userCount'=>$userCount,
    'casesCount'=>$casesCount,
    'blogsCount'=>$blogsCount,
    'workshopCount'=>$workshopCount,
    'adminCount'=>$adminCount,
    'experienceCount'=>$experienceCount,
'recentlyAddedAdmins'=>$recentlyAddedAdmins,
'latestUsers'=>$latestUsers,
'activeUsers'=>$activeUsers,
'registeredCount'=>$registeredCount,
'messages'=>  $messages,
'registeredParticipants'=> $registeredParticipants,
'recentMessages'=>$recentMessages]);
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
