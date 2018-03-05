<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

use App\Repair;
use Auth;

class RepairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        
        $CurrentUser = Auth::user()->name;
        dd($CurrentUser);
        $repairs = Repair::all()->where("completed",true);
        $incomplete = Repair::all()->where("completed",false);
        return view('repairs.index',compact('repairs', 'incomplete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repairs.create',compact('repairs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->property_id!==0){
            $repair->property_id = $request->property_id;
            $repair->description = $repair->description;

            $repair->save();
        }
        return redirect()->action('RepairsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('repairs.show')->withRepair(Repair::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('repairs.edit')->withRepair(Repair::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $repair = Repair::find($id);
        
        if (strlen($request->property_id)!==0){
        $repair->property_id = $request->property_id;
        }
        
        if (strlen($request->description)!==0){
            $repair->description = $request->description;
        }
        
        $repair->save();
        return redirect()->action('RepairsController@show',[$id]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $repair = Repair::findOrFail($id);
        
            $repair->delete();
        
            return redirect()->action('RepairsController@index'); 
        }
        
    }
}
