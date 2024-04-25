<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences=Experience::all();
        return view('admin.feedback.feedback_view', compact(var_name:'experiences'));
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
    public function show(Experience $experience)
    {
        $experiences=Experience::onlyTrashed()->get();
        return view('admin.feedback.feedback_soft_delete',compact(var_name:'experiences'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Experience::findOrFail($id)->delete();     
        return redirect()->route('experiences.index');
        
    }

    public function showDeletedExperiences()
    {
        $experiences=Experience::whereNotNull('deleted_at')->get();
return view('admin.feedback.feedback_soft_delete',compact('experiences'));
    }

    public function restore($id){
        Experience::withTrashed()->where('id',$id)
       ->restore();
        return redirect()->route('experiences.index');
    }
    
    public function forceDelete($id)
    {
        Experience::withTrashed()->where('id',$id)
        ->forceDelete();
         return redirect()->route('experiences.index');
    }
}
