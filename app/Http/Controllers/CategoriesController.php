<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie = Categories::all();
        return response()->json([
            'status' => true,
            'jobs' => $categorie,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categories = new Categories();

        $request->validate([
            'name' => 'required'
        ]);

        $categories ->name = $request-> name;

        $categories->save();

        return response()->json([
            'status' => true,
            'message' => "A Category Created successfully!",
            'job' => $categories
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories, $id)
    {
        $categories = Categories::find($id);
        return response()->json([
            'status' => true,
            'job' => $categories
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories, $id)
    {

        $categories = Categories::find($id);

        $categories ->name = $request-> name;

        $categories->update();
        
        return $categories;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories,$id)
    {
        $categories = Categories::find($id);
        $categories->delete();

        return response()->json([
            'status' => true,
            'message' => "A category Deleted successfully!",
        ], 200);
    
    }
}
