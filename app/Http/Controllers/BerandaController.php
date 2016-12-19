<?php

namespace App\Http\Controllers;

use App\Follower;
use App\Following;
use Illuminate\Http\Request;
use App\Tweet;
use App\User;
use DB;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \Auth::user();

        $pengunas = $users->followings()->get()->pluck('id');
//        dd($pengunas);

        $tweets = Tweet::with('user')->whereIn('user_id',$pengunas)->orderBy('created_at', 'desc')->get();
      
        $tweets_user = Tweet::with('user')->whereUserId($users->id)->orderBy('created_at', 'desc')->get();
        $tweets = $tweets->merge($tweets_user)->sortByDesc('created_at');

        $datas = Following::where('user_id',\Auth::user()->id)->get();
        $followers = Follower::where('user_id',\Auth::user()->id)->get();
//        dd($followers);
//        dd($datas);
        foreach ($datas as $data){
            $followings[]= $data->following_id;
        }
        if (!empty($followings)){
            $gets = User::whereNotIn('id',$followings)->where('id','!=',\Auth::user()->id)->get();
        } else{
            $gets = User::where('id','!=',\Auth::user()->id)->get();
        }

//        dd($tweets);
        return view('beranda.beranda',compact('users','tweets','datas','pengunas','gets','tweets','tweets_user','followers'));
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
        $tweet = new Tweet();
        $tweet->user_id = \Auth::user()->id;
        $tweet->tweet = $request->isi;
        $tweet->save();
        return back();

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
