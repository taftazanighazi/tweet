<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Following;
use App\Follower;
use App\User;
use DB;

class FollowingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users      = \Auth::user();
        $followings = DB::table('users')->join('users_followings','users.id','=','users_followings.following_id')
            ->where('users_followings.user_id','=',\Auth::user()->id)->get();

        return view('friend.following',compact('users','followings'));
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
        $following = new Following();
        $following->following_id = $request->following_id;
        $following->user_id = auth()->user()->id;
        $following->save();

        $follower = new Follower();
        $follower->user_id = $request->following_id;
        $follower->follower_id = auth()->user()->id;
        $follower->save();
        return redirect('/following');
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
