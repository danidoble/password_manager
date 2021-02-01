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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'site_name' => ['required','string','min:2'],
            'username' => ['sometimes','string','min:2'],
            'password' => ['required','string','min:4']
        ]);

        $k1 = Keys::where('type',1)->orderBy(DB::raw('rand()'))->first();
        $k2 = Keys::where('type',2)->orderBy(DB::raw('rand()'))->first();

        $encrypted = CryptController::crypt($request->input('password'),$k1->key_data,$k2->key_data);

        $username = null;
        if($request->has('username')){
            $username = $request->input('username');
        }
        $url = null;
        if($request->has('url')){
            $url = $request->input('url');
        }

        $old_password = Password::where('user_id',Auth::user()->getAuthIdentifier())
            ->where('site_name','=',$request->input('site_name'))
            ->where('username',$username)
            ->where('url',$url)
            ->first();
        if(!empty($old_password)){
            $old_password->delete();
        }

        $password = new Password();
        $password->site_name = $request->input('site_name');
        $password->password = $encrypted;
        $password->user_id = Auth::User()->getAuthIdentifier();
        $password->key_one_id = $k1->id;
        $password->key_two_id = $k2->id;

        if($request->has('username')){
            $password->username = $username;
        }
        if($request->has('url')){
            $password->url = $url;
        }


        $password->save();
        return response('ok',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Password  $password
     * @return \Illuminate\Http\Response
     */
    public function show(Password $password)
    {
        //
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
