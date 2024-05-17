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
                ->whereIn('Category', ['Big Occasions', 'Psychological'])
                ->whereNull('Photo')
                ->groupBy('Category');
        })
            ->orWhereNotIn('Category', ['Big Occasions', 'Psychological'])
            ->whereIn('id', function ($query) {
                $query->selectRaw('MIN(id)')
                    ->from('blogs')
                    ->groupBy('Category');
            })
            ->get();



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
        return view('user.blogs',compact('blogs'));

    }

    public static function facebookShare($url)
    {
        return "https://www.facebook.com/sharer/sharer.php?u=" . urlencode($url);
    }

    public static function whatsappShare($text)
    {
        return "whatsapp://send?text=" . urlencode($text);
    }

    public static function pinterestShare($url, $image, $description)
    {
        return "https://pinterest.com/pin/create/button/?url=" . urlencode($url) . "&media=" . urlencode($image) . "&description=" . urlencode($description);
    }

    public static function twitterShare($url, $text)
    {
        return "https://twitter.com/intent/tweet?url=" . urlencode($url) . "&text=" . urlencode($text);
    }


}
