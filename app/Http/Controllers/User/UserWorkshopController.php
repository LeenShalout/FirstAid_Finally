<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registered;
use App\Models\Workshop;

class UserWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workshops = Workshop::all(); // Retrieve all tasks
        return view('user.workshop', compact('workshops'));
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
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'workshop_id' => 'required|exists:workshops,id'
    ]);

    $registered = new Registered();
    $registered->Workshop_id = $request->id;
    $registered->first_name = $request->first_name;
    $registered->last_name = $request->last_name;
    $registered->Email = $request->email;
    $registered->phone = $request->phone;
    $registered->save();

    return redirect()->route('workshop.index')->with('success', 'Registration successful');
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data=Workshop::findOrfail($id);
        return view('user.workshopForm',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
