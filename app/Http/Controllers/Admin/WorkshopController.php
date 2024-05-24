<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role=="admin"){
            $workshops = Workshop::all();
        return view('admin/workshop/workshopTitle_view', compact('workshops'));
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
        return view('admin/workshop/workshopTitle_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   {
    $request->validate([
        'title' => 'required|unique:workshops|max:255',
        'description' => 'required',
        'workshop_date' => 'required|date',
        'workshop_type' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $photo_name = $request->file('photo')->getClientOriginalName();
    $request->file('photo')->storeAs('public/image', $photo_name);

    $workshops = new Workshop();
    $workshops->title = $request->title;
    $workshops->description = $request->description;
    $workshops->workshop_date = $request->workshop_date;
    $workshops->workshop_type = $request->workshop_type;
    $workshops->photo = $photo_name;
    $workshops->save();

    return redirect()->route('AdminWorkshop.index')->with('success', "Inserted data done");
   }


    /**
     * Display the specified resource.
     */
    public function show(Workshop $workshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $workshops=Workshop::findorfail($id);
        return view('admin/workshop/workshopTitle_edit',compact('workshops'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
  {
    /**
 * Update the specified resource in storage.
 */


    $request->validate([
        'title' => [
            'required',
            Rule::unique('workshops')->ignore($id),
            'max:255',
        ],
        'description' => 'required',
        'workshop_date' => 'required|date',
        'workshop_type' => 'required',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $workshop = Workshop::findOrFail($id);

    // Update the workshop attributes
    $workshop->title = $request->title;
    $workshop->description = $request->description;
    $workshop->workshop_date = $request->workshop_date;
    $workshop->workshop_type = $request->workshop_type;

    // Handle photo update
    if ($request->hasFile('photo')) {
        $photo_name = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public/image', $photo_name);
        $workshop->photo = $photo_name;
    }

    // Save the updated model
    $workshop->save();

    return redirect()->route('AdminWorkshop.index')->with('success', 'Updated data successfully');
}

  



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Workshop::destroy($id);
        return redirect()->route('AdminWorkshop.index')->with('succsess',"Deleted data Done");
    }
}
