<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
            'location' => 'nullable|string',
            'phone' => 'nullable|string',
            'birthday' => 'nullable|date',
            // Add validation rules for other fields
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->location = $request->location;
        $user->phone = $request->phone;
        $user->birthday = $request->birthday;

        if ($request->hasFile('img')) {
            if ($user->img) {
                Storage::delete('public/image/' . $user->img);
            }

            // Upload the new image
            $imagePath = $request->file('img')->store('public/image');

            // Get the image name
            $imageName = basename($imagePath);

            // Update the image path in the database
            $user->img = $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
