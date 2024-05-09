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

        // Store the uploaded photo
        $photo_name = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('public/image', $photo_name);

        // Store the uploaded main image
        $main_img_name = $request->file('MainImg')->getClientOriginalName();
        $request->file('MainImg')->storeAs('public/image', $main_img_name);

        $steps = [];
        $count = $request->input('count'); // Get the total number of steps


        for ($i = 0; $i <= $count; $i++)
        {
            $step_key = 'Steps' . $i;
            $dis_key = 'dis' . $i;


            if ($request->has($step_key) && $request->has($dis_key)) {
                $step = $request->input($step_key);
                $description = $request->input($dis_key);


                $steps[] = ['step' => $step, 'description' => $description];
            }

        }

        // Create a new Blog instance
        $blog = new Blog();
        $blog->Category = $request->Category;
        $blog->MainTitle = $request->MainTitle;
        $blog->Title = $request->Title;
        $blog->MainImg = $main_img_name;
        $blog->Summary = $request->Summary;
        $blog->Intro = $request->Intro;

        $blog->Steps = json_encode($steps);

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
            'Title' => 'required|unique:blogs,Title,' . $id,
            'MainTitle' => 'required|unique:blogs,MainTitle,' . $id,
            'Photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'MainImg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('Photo')) {
            $photo_name = $request->file('Photo')->store('public/image');
            $blog->Photo = $photo_name;
        }

        if ($request->hasFile('MainImg')) {
            $main_img_name = $request->file('MainImg')->store('public/image');
            $blog->MainImg = $main_img_name;
        }

        $blog->Category = $request->Category;
        $blog->MainTitle = $request->MainTitle;
        $blog->Title = $request->Title;
        $blog->Summary = $request->Summary;
        $blog->Intro = $request->Intro;
        $blog->Steps = $request->Steps; // Ensure proper handling of steps input
        $blog->Conclusion = $request->Conclusion;
        $blog->save();

        return redirect()->route('AdminBlog.index')->with('success', 'Blog updated successfully');
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
