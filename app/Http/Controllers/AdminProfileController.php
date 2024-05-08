<?php

namespace App\Http\Controllers;

use App\Models\AdminProfile;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role=="admin"){
            //$users=User::all();
            return view('admin.users.adminProfile');
        }
        else {

            return view('index');

        }
        // $users = User::all();
        // $admins = AdminProfile::all();
        // return view('admin.users.adminProfile', compact('users', 'admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.adminProfile_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'name'=>'required', 
            'email' => 'required',
            'password'=>'required',
            'img'=>'required',
            'location'=>'required',
            'Phone'=>'required',
        ]);

        if ($request->hasFile('img')) {
            $imgName = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/image', $imgName);
        } else {
            $imgName = 'default_image.jpg'; 
        }
        $myUser=new User();
        $myUser->name=$request->name;
        $myUser->email=$request->email;
        $myUser->password=$request->password;
        $myUser->img=$imgName;
        $myUser->location=$request->location;
        $myUser->Phone=$request->Phone;
        $myUser->save();
        return redirect()->route('admins.index')->with('success','Admin added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminProfile $adminProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin=AdminProfile::findOrFail($id);
        return view('admin.users.adminProfile',compact(var_name:'admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $admin=AdminProfile::findOrFail($id);
        $admin->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'img'=>$request->img,
            'location'=>$request->location,
            'Phone'=>$request->Phone,
            'role'=>$request->role

        ]);
        return redirect()->route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        AdminProfile::withTrashed()->where('id',$id)
        ->destroy();
         return redirect()->route('users.index');


        // AdminProfile::findOrFail($id)->delete();     
        // return redirect()->route('admins.index');
    }
}
