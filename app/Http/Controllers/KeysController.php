<?php

namespace App\Http\Controllers;

use App\Models\Keys;
use Illuminate\Http\Request;

class KeysController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keys  $keys
     * @return \Illuminate\Http\Response
     */
    public function show(Keys $keys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keys  $keys
     * @return \Illuminate\Http\Response
     */
    public function edit(Keys $keys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keys  $keys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keys $keys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keys  $keys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keys $keys)
    {
        //
    }

    public static function makeForApp($each){
        for ($i=0;$i<$each;$i++){
            $k1 = base64_encode(openssl_random_pseudo_bytes(32));
            $key1 = new Keys();
            $key1->key_data = $k1;
            $key1->type = 1;
            $key1->save();

            $k2 = base64_encode(openssl_random_pseudo_bytes(64));
            $key2 = new Keys();
            $key2->key_data = $k2;
            $key2->type = 2;
            $key2->save();
        }
    }
}
