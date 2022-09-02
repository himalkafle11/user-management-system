<?php

namespace App\Http\Controllers;

use App\Models\OurUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginUser(){
        return view('loginuser');
    }

    public function registerUser(){
        return view('registeruser');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userpage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new OurUser;
        $user->user_name=$request->get('name');
        $user->user_address=$request->get('address');
        $user->user_contact=$request->get('contact');
        $user->user_email=$request->get('email');
        $user->user_password=$request->get('password');
        $user->save();

        return redirect('/');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurUser  $ourUser
     * @return \Illuminate\Http\Response
     */
    public function show(OurUser $ourUser)
    {
        $users=OurUser::all();
        return view('showUsers',['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurUser  $ourUser
     * @return \Illuminate\Http\Response
     */
    public function edit(OurUser $ourUser,$id)
    {
        $users=OurUser::find($id);
        return view('editUsers',['users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurUser  $ourUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurUser $ourUser,$id)
    {
        $users=OurUser::find($id);
        $users->user_name=$request->get('name');
        $users->user_address=$request->get('address');
        $users->user_contact=$request->get('contact');
        $users->save();

        return redirect('showUsers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurUser  $ourUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurUser $ourUser,$id)
    {
        $ourUser=OurUser::find($id);
        $ourUser->delete();
        return redirect('showUsers');
    }
}