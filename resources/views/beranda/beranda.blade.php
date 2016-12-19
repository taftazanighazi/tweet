@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 " style="background-color: #ffffff">
                {{--<div class="twPc-div">--}}
                    <a class="twPc-bg twPc-block"></a>

                    {{--<div>--}}

                        <a class="twPc-avatarLink">
                            <img alt="Mert Salih Kaplan" src="https://placehold.it/80x80">
                        </a>

                        <div class="twPc-divUser">
                            <div class="twPc-divName">
                                <p>{{$users->name}}</p>
                            </div>
                            {{--<span>--}}
                            {{--<a href="https://twitter.com/mertskaplan">@<span>mertskaplan</span></a>--}}
                            {{--</span>--}}
                        </div>

                        <div class="twPc-divStats">
                            <ul class="twPc-Arrange">
                                <li class="twPc-ArrangeSizeFit">
                                    {{--<a href="https://twitter.com/mertskaplan" title="9.840 Tweet">--}}
                                        <span class="twPc-StatLabel twPc-block">Tweets</span>
                                        <span class="twPc-StatValue"><p>{{$tweets_user->count()}}</p></span>
                                    </a>
                                </li>
                                <li class="twPc-ArrangeSizeFit">
                                    <a href="/following" title="885 Following">
                                        <span class="twPc-StatLabel twPc-block">Following</span>
                                        <span class="twPc-StatValue">{{$datas->count()}}</span>
                                    </a>
                                </li>
                                <li class="twPc-ArrangeSizeFit">
                                    <a href="/followers" title="1.810 Followers">
                                        <span class="twPc-StatLabel twPc-block">Followers</span>
                                        <span class="twPc-StatValue">{{$followers->count()}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
            </div>
            <div class="col-lg-6 col-sm-4 col-xs-12">
                <div class="panel panel-default">

                    <form method="POST" action="{{route('beranda.store')}}">
                        {{csrf_field()}}
                        <div class="panel-body">

                            <textarea name="isi" maxlength="140" class="form-control" placeholder="Apa yang anda pikirkan?" required></textarea>
                            </br>
                            <button type="submit" class="btn btn-twitter" name="Tweet">Tweet</button>

                        </div>
                    </form>
                </div>
                @foreach($tweets as $tweet)
                    <div class="thumbnail">
                        <a href="{{url('user',$tweet->user->id)}}"> <h2>{{$tweet->user->name}}</h2></a>
                        <div class="caption">
                            {{--<p>yes</p>--}}
                            {{--<h2>Nama:{{$tweet->name}}</h2>--}}
                            <p>{{$tweet->tweet}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="panel panel-default">
                    {{--<div class="panel-heading">--}}
                        {{----}}
                    {{--</div>--}}
                    <h4 style="text-align: center;">For following</h4>
                    @foreach($gets as $get)
                        {{--<div class="panel-body">--}}
                              {{--@if(Auth::user()->id!=$penguna->id)--}}
                            <ul class="list-group">
                                <a href="{{url('user',$get->id)}}"><li class="list-group-item">{{$get->name}}</li></a>
                            </ul>
                        {{--@endif--}}
                        {{--</div>--}}
                    @endforeach
                </div>
            </div>

            <!-- code end -->
        </div>
    </div>
@endsection