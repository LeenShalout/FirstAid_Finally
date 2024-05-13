<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MyCase;
use Illuminate\Http\Request;

class UserCaseController extends Controller
{
    public function userIndex($category)
    {
        $cases = MyCase::where('Category', $category)->get();
        return view('user.mainCases',compact('cases'));
    }
    public function userCase($id)
    {
        $cases = MyCase::where('id', $id)->get();
        return view('user.cases',compact('cases'));
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $results = Mycase::where('Title', 'like', '%' . $keyword . '%')
            ->get();

        return view('user.mainCases',compact('results'));
    }

}
