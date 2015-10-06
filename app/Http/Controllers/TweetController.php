<?php

namespace App\Http\Controllers;

use App\Decorator\TweetFormatter;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TweetController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only'=>['store','update','destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return with(new TweetFormatter(\App\Tweet::latest()->limit(10)->get()))->toArray();
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
    public function store(Requests\TweetRequest $request)
    {
        // criar um tweet objecto
        $tweet = new \App\Tweet(['tweet'=>$request->tweet]);

        // salvar esse tweet no usario
        \Auth::user()->tweets()->save($tweet);

        // returnar informaçao do tweet
        return with(new TweetFormatter(
            new Collection([$tweet])
        ))->toArray()->first();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
