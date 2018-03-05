<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Property;
use App\User;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();
        return view('properties.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create',compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($property_id)
    {
        $property = Property::find($property_id);
        return view('properties.show')
        ->with(['property'=>$property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $property_id
     * @return \Illuminate\Http\Response
     */
    public function edit($property_id)
    {
        {
        return view('properties.edit')->withProperty(Property::find($property_id));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $property_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $property_id)
    {
        $property = Property::find($property_id);
        if (strlen($property->tenant)!==0){
            $property->tenant = $request->tenant;
        }
        if (strlen($property->rent)!==0){
            $property->rent = $request->rent;
        }
        $property->save();
        return redirect()->action('PropertiesController@show',[$property_id]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($property_id)
    {
        //
    }
}
