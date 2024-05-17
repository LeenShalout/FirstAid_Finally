<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();

        return view('user.experienceAllPosts',compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'experience' => 'required',
            'experienceImage' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $experience = new Experience();
        $experience->Post = $request->experience;

        if ($request->hasFile('experienceImage')) {
            $imagePath = $request->file('experienceImage')->getClientOriginalName();
            $request->file('experienceImage')->storeAs('public/image', $imagePath);
            $experience->Img = $imagePath;
        }

        $experience->user_id = auth()->user()->id;
        $experience->save();

        return redirect('/experienceAllPosts');
    }


    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $experience = Experience::findOrFail($id);
        return view('user.experienceMyPostsEdit', compact('experience'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $experience = Experience::findOrFail($id);

        $request->validate([
            'experience' => 'required',
            'experienceImage' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('experienceImage')) {
            if ($experience->Img) {
                Storage::delete('public/image/' . $experience->Img);
            }

            // Upload the new image
            $imagePath = $request->file('experienceImage')->store('public/image');

            // Get the image name
            $imageName = basename($imagePath);

            // Update the image path in the database
            $experience->Img = $imageName;
        }


        // Update other fields
        $experience->Post = $request->experience;
        $experience->user_id = Auth::id(); // Assigning the authenticated user's ID to the user_id field
        $experience->save();

        return redirect('/experienceMyPosts');

//        return redirect()->route('experienceMyPosts')->with('success', 'Experience updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Experience::destroy($id);
        return redirect('/experienceMyPosts');



    }
    public function latestPosts()
    {
        $latestPosts = Experience::latest()->paginate(5);
        return view('user.experienceLatest',compact('latestPosts'));

    }
    public function myPosts()
    {
        $user = Auth::user();
        $myPosts = $user->experiences()->latest()->get();

        return view('user.experienceMyPosts', compact('myPosts'));
    }




}
