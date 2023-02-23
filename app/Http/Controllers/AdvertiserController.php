<?php

namespace App\Http\Controllers;

use App\Models\Advertiser;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertise = Advertiser::all();
        return response()->json([
            'status' => true,
            'advertisements' => $advertise,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $advertiser = new Advertiser();

        $request ->validate([
            'name' => 'required',
            'description' => 'required',
            'web' => 'required',
            'location' => 'required',
            'contact' => 'required'
        ]);

        $advertiser ->name = $request->name;
        $advertiser ->description = $request->description;
        $advertiser ->web = $request->web;
        $advertiser ->location = $request->location;
        $advertiser ->contact = $request->contact;
        $advertiser->save();

        return response()->json([
            'status' => true,
            'message' => "A Job Created successfully!",
            'job' => $advertiser
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertiser $advertiser, $id)
    {
        $advertiser = Advertiser::find($id);
        
        return response()->json([
            'status' => true,
            'message' => "Job Updated successfully!",
            'job' => $advertiser
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advertiser $advertisers, $id)
    {
        
        $advertisers = Advertiser::find($id);
        
        $advertisers ->name = $request->name;
        $advertisers ->description = $request->description;
        $advertisers ->web = $request->web;
        $advertisers ->location = $request->location;
        $advertisers ->contact = $request->contact;
       
        $advertisers->update();

        return $advertisers;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertiser $advertiser, $id)
    {
        $advertiser = Advertiser::find($id);
        if(is_null($advertiser)){
            return response()->json('No se pudo realizar la peticion', 404);
        }
        $advertiser->delete();

        return response()->noContent();
    
    }
}
