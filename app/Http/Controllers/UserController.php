<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Read operation
    function index()   // users name se index function chalta h
    {
        $users= User::all();
         return view('index',compact('users'));
    }
    function create()
    {
        return view('create');
    }
    function edit($id)
    {
        $user= User::find($id);
        return view('edit',compact('user'));
    }

    //Create operation
    function store(Request $request)
    {
        $user= new User();
        $user->name= $request['name'];
        $user->email= $request['email'];
        $user->password=$request['password'];
        $user->save();
        return redirect::route('users');
    }
    //update
    function update(Request $request, $id)
    {
        $user= User::find($id);
        $user->name= $request['name'];
        $user->email= $request['email'];
        $user->password=$request['password'];
        $user->save();
        return redirect::route('users');
    }
    // function show($id)
    // {
    //     $user= User::find($id);
    //     return $user;
    // }


    //Delete
    function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
        return redirect::route('users');
    }

}
