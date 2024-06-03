<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        
        // return $users;

        return view("home",compact('users'));

        // foreach ($users as $user){
        //     echo $user->name . "<br>";
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->username;
        $user->email = $request->useremail;
        $user->age = $request->userage;
        $user->city = $request->usercity;

        $user->save();

        return redirect()->route('user.index')->with('status', 'New user added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user)
    {
        $users = User::find($user);
        return view('viewuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = User::find($user->id);
        return view('updateuser',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = new User;

        $user->name = $request->username;
        $user->email = $request->useremail;
        $user->age = $request->userage;
        $user->city = $request->usercity;

        $user->save();

        return redirect()->route('user.index')->with('status', 'New user data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);

        $users->delete();

        return redirect()->route('user.index')->with('status', 'Data Deleted successfully.');
    }
}
