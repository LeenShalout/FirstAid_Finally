<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MyCase;
use Illuminate\Http\Request; // Correct namespace

class UserCaseController extends Controller
{
    public function userIndex(Request $request, $category)
    {
        $search = $request->input('search');

        if ($search) {
            $cases = MyCase::where('Category', $category)
                ->where('Title', 'LIKE', "%" . $search . "%")
                ->get();
        } else {
            $cases = MyCase::where('Category', $category)->get();
        }

        return view('user.mainCases', compact('cases'));
    }
    public function userCase($id)
    {
        $cases = MyCase::where('id', $id)->get();
        $categories = MyCase::all();
        return view('user.cases',compact('cases','categories'));
    }
//    public function userCategory()
//    {
//        $categories = MyCase::all();
//        return view('user.cases',compact('categories'));
//    }


}
