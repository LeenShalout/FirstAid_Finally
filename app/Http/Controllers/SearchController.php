<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyCase;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $results = Mycase::where('Title', 'like', '%' . $keyword . '%')
            ->get();

//        return view('user.mainCases',compact('results'));
    }
}
