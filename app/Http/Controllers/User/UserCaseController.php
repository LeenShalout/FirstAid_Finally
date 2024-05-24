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
        // Retrieve the specific case based on the provided ID
        $case = MyCase::findOrFail($id);

        // Retrieve all cases that belong to the same category as $case
        $cases = MyCase::where('Category', $case->Category)
            ->where('id', '<>', $id)
            ->orWhere('id', '=', $id)
        ->get();

        // Pass the specific case and related cases to the view
        return view('user.cases', compact('case', 'cases'));
    }

}
