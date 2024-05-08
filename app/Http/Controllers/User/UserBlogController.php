<?php


namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class UserBlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)')
                ->from('blogs')
                ->groupBy('Category');})->get();


    return view('user.mainBlogs',compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function sort($category)
    {
        $blogs = Blog::where('Category', $category)->get();
        return view('user.mainBlogs',compact('blogs',));

    }
    public function blogIndex($id)
    {
        $blogs = Blog::where('id', $id)->get();
//        $data = json_decode(Storage::get('blogs.json'), true);

        return view('user.blogs',compact('blogs'));

    }
}
