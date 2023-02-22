<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jobs::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jobs = new Jobs();

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'location'=>'required',
            'salary'=>'required',
        ]);

        $jobs ->title = $request ->title;
        $jobs ->description = $request ->description;
        $jobs ->location = $request ->location;
        $jobs ->salary = $request ->salary;

        $jobs->save();

        return $jobs;
    }

    /**
     * Display the specified resource.
     */
    public function show(Jobs $jobs, $id)
    {
        $jobs = Jobs::find($id);
        return $jobs;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jobs $jobs, $id)
    {
        $jobs = Jobs::find($id);
        $jobs ->title = $request ->title;
        $jobs ->description = $request ->description;
        $jobs ->location = $request ->location;
        $jobs ->salary = $request ->salary;

        $jobs->update();

        return $jobs;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jobs $jobs, $id)
    {
        $jobs = Jobs::find($id);
        if(is_null($jobs)){
            return response()->json('No se pudo realizar la peticion', 404);
        }
            $jobs->delete();

        return response()->noContent();
    
    }
}
