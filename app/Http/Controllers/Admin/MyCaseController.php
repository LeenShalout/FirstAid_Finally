<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MyCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role=="admin"){
            $cases = MyCase::all();
            return view('admin.case.case_view', compact('cases'));
        }
        else {

            return view('index');

        }
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.case.case_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Category' => 'required',
            'Title' => 'required|unique:my_cases|max:255',
            'Photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'MainPhoto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $photo_name = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('public/image', $photo_name);

        $Main_photo = $request->file('MainPhoto')->getClientOriginalName();
        $request->file('MainPhoto')->storeAs('public/image', $Main_photo);

        $case = new MyCase();
        $case->Category = $request->Category;
        $case->Title = $request->Title;
        $case->MainPhoto = $Main_photo;
        $case->Description = $request->Description;
        $case->Intro = $request->Intro;
        $case->Signs = $request->Signs;
        $case->Treatment_Procedures = $request->Treatment_Procedures;
        $case->Prevention_Tips = $request->Prevention_Tips;
        $case->Before = $request->Before;
        $case->During = $request->During;
        $case->After = $request->After;
        $case->Photo = $photo_name;
        $case->Video = $request->Video;
        $case->save();

        return redirect()->route('AdminCase.index')->with('success', "Case inserted successfully");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $case = MyCase::findOrFail($id);
        return view('admin.case.case_edit', compact('case'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
 {
    $case = MyCase::findOrFail($id);

    $request->validate([
        'Category' => 'required',
        'Title' => 'required|max:255|unique:my_cases,Title,' . $id,
        'Photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'MainPhoto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        // Add validation for the video file if needed
    ]);

    if ($request->hasFile('Photo')) {
        $photo_name = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('public/image', $photo_name);
        $case->Photo = $photo_name;
    }

    if ($request->hasFile('MainPhoto')) {
        $Main_photo = $request->file('MainPhoto')->getClientOriginalName();
        $request->file('MainPhoto')->storeAs('public/image', $Main_photo);
        $case->MainPhoto = $Main_photo;
    }

    // Update other fields
    $case->Category = $request->Category;
    $case->Title = $request->Title;
    $case->Description = $request->Description;
    $case->Intro = $request->Intro;
    $case->Signs = $request->Signs;
    $case->Treatment_Procedures = $request->Treatment_Procedures;
    $case->Prevention_Tips = $request->Prevention_Tips;
    $case->Before = $request->Before;
    $case->During = $request->During;
    $case->After = $request->After;
    $case->Video = $request->Video;
    $case->save();

    return redirect()->route('AdminCase.index')->with('success', "Case updated successfully");
  }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        MyCase::findOrFail($id)->delete();
        return redirect()->route('AdminCase.index')->with('success', "Case deleted successfully");
    }
}
