<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
  {
    $blogs = Blog::all();
    return view('admin.blog.blog_view', compact('blogs'));
  }


    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        return view('admin.blog.blog_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Category' => 'required',
            'Title' => 'required|unique:blogs|max:255',
            'MainTitle' => 'required|unique:blogs|max:255',
            'Photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'MainImg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add validation for the video file if needed
        ]);

        $photo_name = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('public/image', $photo_name);

        $Main_Img = $request->file('MainImg')->getClientOriginalName();
        $request->file('MainImg')->storeAs('public/image', $Main_Img);

        $blog = new Blog();
        $blog->Category = $request->Category;
        $blog->MainTitle = $request->MainTitle;
        $blog->Title = $request->Title;
        $blog->MainImg = $Main_Img;
        $blog->Summary = $request->Summary;
        $blog->Intro = $request->Intro;
        $blog->Steps = $request->Steps;
        $blog->Photo = $photo_name;
        $blog->Conclusion = $request->Conclusion;
        $blog->save();

        return redirect()->route('AdminBlog.index')->with('success', "Blog inserted successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.blog_edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $blog = Blog::findOrFail($id);

    $request->validate([
        'Category' => 'required',
        'Title' => 'required|unique:blogs,Title,' . $id, // Use unique validation excluding the current blog's ID
        'MainTitle' => 'required|unique:blogs,MainTitle,' . $id, // Use unique validation excluding the current blog's ID
        'Photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Make Photo field nullable
        'MainImg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Make MainImg field nullable
    ]);
        $request->validate([
            'Category' => 'required',
            'Title' => 'required|unique:my_cases|max:255',
            'MainTitle' => 'required|unique:my_cases|max:255',
            'Photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'MainImg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('Photo')) {
            $photo_name = $request->file('Photo')->getClientOriginalName();
            $request->file('Photo')->storeAs('public/image', $photo_name);
            $case->Photo = $photo_name;
        }

        if ($request->hasFile('MainImg')) {
            $Main_Img = $request->file('MainImg')->getClientOriginalName();
            $request->file('MainImg')->storeAs('public/image', $Main_Img);
            $case->MainImg = $Main_Img;
        }

        // Update other fields
        $blog->Category = $request->Category;
        $blog->MainTitle = $request->MainTitle;
        $blog->Title = $request->Title;
        $blog->Summary = $request->Summary;
        $blog->Intro = $request->Intro;
        $blog->Steps = $request->Steps;
        $blog->Conclusion = $request->Conclusion;
        $blog->save();

        return redirect()->route('AdminBlog.index')->with('success', "Blog Updated successfully");

    // Handle Photo file upload
    if ($request->hasFile('Photo')) {
        $photo_name = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('public/image', $photo_name);
        $blog->Photo = $photo_name;
    }

    // Handle MainImg file upload
    if ($request->hasFile('MainImg')) {
        $main_img_name = $request->file('MainImg')->getClientOriginalName();
        $request->file('MainImg')->storeAs('public/image', $main_img_name);
        $blog->MainImg = $main_img_name;
    }

    // Update other fields
    $blog->Category = $request->Category;
    $blog->MainTitle = $request->MainTitle;
    $blog->Title = $request->Title;
    $blog->Summary = $request->Summary;
    $blog->Intro = $request->Intro;
    $blog->Steps = $request->Steps;
    $blog->Conclusion = $request->Conclusion;
    $blog->save();

    return redirect()->route('AdminBlog.index')->with('success', "Blog Updated successfully");
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Blog::findOrFail($id)->delete();
        return redirect()->route('AdminBlog.index')->with('success', "Blog deleted successfully");
    }

}
