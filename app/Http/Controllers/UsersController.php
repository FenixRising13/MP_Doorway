<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Require the class
use App\User;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'phone',
                'title',
                'property_id',
            ]);
            
            $user = User::create(['name' => $request->name, 'email' => $request->email, 'password' => $request->password, 'phone' => $request->phone, 'title' => $request->title,'property_id' => $request->property_id, '']);
            return redirect('/users/'.$user->id);
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.show')->withUser(User::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            return view('users.edit')->withUser(User::find($id));
        }
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
        $user = User::find($id);
        if (strlen($request->name)!==0){
            $user->name = $request->name;
        }
        if (strlen($request->email)!==0){
            $user->email = $request->email;
        }
        if (strlen($request->title)!==0){
            $user->title = $request->title;
        }
        if (strlen($request->phone)!==0){
            $user->phone = $request->phone;
        }
        $user->save();
        // Save history with updated_at
        return redirect()->action('UsersController@show',[$id]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
