<?php

namespace App\Http\Controllers;


use App\Models\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(Auth()->user()->role=="admin"){
            $users=User::all();
            return view('admin.users.users_view',compact(var_name:'users'));
        }
        else {

            return redirect()->route('users.index');

        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.users_create');
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
            'role'=>'required'
        ]);
// dd($request->hasFile('img'));
        if ($request->hasFile('img')) {
            $imgName = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/image', $imgName);
        } else {
            $imgName = 'Images/profile.jpg'; // Default image path
        }

        $myUser=new User();
        $myUser->name=$request->name;
        $myUser->email=$request->email;
        $myUser->password=$request->password;
        $myUser->img=$imgName;
        $myUser->location=$request->location;
        $myUser->Phone=$request->Phone;
        $myUser->role=$request->role;
        $myUser->birthday=$request->birthday;



        $myUser->save();
        return redirect()->route('users.index')->with('success','User added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users=User::onlyTrashed()->get();
        return view('admin.users.users_soft_delete',compact(var_name:'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('admin.users.users_edit',compact(var_name:'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $user=User::findOrFail($id);

        // if ($request->hasFile('img')) {
        //     $imgName = $request->file('img')->getClientOriginalName();
        //     $request->file('img')->storeAs('public/image', $imgName);
        // }

        if ($request->hasFile('img')){
            if($user->img){
                Storage::delete('public/image'.$user->img);
            }
            $imgPath=$request->file('img')->store('public/image');
            $imgName=basename($imgPath);
            $user->img=$imgName;
        }
        if ($user->role != $request->role) {
            $user->role = $request->role;
            // Additional logic for role change, if needed
        }

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'location'=>$request->location,
            'Phone'=>$request->Phone,



        ]);

       

        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        User::findOrFail($id)->delete();
        return redirect()->route('users.index');
    }

    public function showDeletedUsers(){

        $users=User::whereNotNull('deleted_at')->get();
        return view('admin.users.users_soft_delete',compact('users'));
    }

    public function restore($id){
        User::withTrashed()->where('id',$id)
            ->restore();
        return redirect()->route('users.index');
        // return view('admin.users.users_edit',compact(var_name:'id'));
    }

    public function forceDelete($id)
    {
        User::withTrashed()->where('id',$id)
            ->forceDelete();
        return redirect()->route('users.index');
    }
}
