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
        return Advertiser::all();
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

        return $advertiser;
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertiser $advertiser, $id)
    {
        $advertiser = Advertiser::find($id);
        
        return $advertiser;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advertiser $advertiser, $id)
    {
        
        $advertiser = Advertiser::find($id);
        
        $advertiser ->name = $request->name;
        $advertiser ->description = $request->description;
        $advertiser ->web = $request->web;
        $advertiser ->location = $request->location;
        $advertiser ->contact = $request->contact;
       
        $advertiser->update();

        return $advertiser;
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
