<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Registered;
use Illuminate\Http\Request;

class RegisteredController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role=="admin"){
            $registrations = Registered::all(); // Retrieve all tasks
            return view('admin/workshop/registered_view', compact('registrations')); // Pass tasks to the 'tasks' view*
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
    public function show(Registered $registered)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registered $registered)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registered $registered)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Registered::destroy($id);
        return redirect()->route('Registered.index');//
    }
}
