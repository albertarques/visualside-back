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
        $job = Jobs::all();
        return response()->json([
            'status' => true,
            'jobs' => $job,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jobs = new Jobs();

        $request->validate([
            'title'=>'required',
            'picture' => 'required',
            'description'=>'required',
            'location'=>'required',
            'salary'=>'required',
        ]);

        $jobs ->title = $request ->title;
        $jobs ->picture = $request ->picture;
        $jobs ->description = $request ->description;
        $jobs ->location = $request ->location;
        $jobs ->salary = $request ->salary;

        $jobs->save();

        return response()->json([
            'status' => true,
            'message' => "A Job Created successfully!",
            'job' => $jobs
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Jobs $jobs, $id)
    {
        $jobs = Jobs::find($id);
        return response()->json([
            'status' => true,
            'message' => "Job Updated successfully!",
            'job' => $jobs
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jobs $jobs, $id)
    {
        $jobs = Jobs::find($id);
        $jobs ->title = $request ->title;
        $jobs ->picture = $request ->picture;
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
            return $jobs->delete()->json('OK');

        return response()->noContent();
    
    }
}
