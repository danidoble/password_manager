<?php

namespace App\Http\Controllers;

use App\Models\Keys;
use App\Models\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
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

    }


    public function show($id)
    {
        $password = Password::where('user_id',Auth::user()->getAuthIdentifier())->findOrFail($id);
        $old_passwords = Password::where('user_id',Auth::user()->getAuthIdentifier())
            ->where('id','<>',$password->id)
            ->where('site_name',$password->site_name)
            ->where('username',$password->username)
            ->where('url',$password->url)
            ->withTrashed()
            ->get();
        return view('passwords.show',[
            'password'=>$password,
            'old_passwords'=>$old_passwords,
            ]);
    }
    public function site_name($site_name)
    {
        $passwords = Password::where('user_id',Auth::user()->getAuthIdentifier())
            ->where('site_name',$site_name)
            ->get();

        return view('passwords.show_users',[
            'passwords'=>$passwords,
            ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Password  $password
     * @return \Illuminate\Http\Response
     */
    public function edit(Password $password)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Password  $password
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Password $password)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Password  $password
     * @return \Illuminate\Http\Response
     */
    public function destroy(Password $password)
    {
        //
    }
}
