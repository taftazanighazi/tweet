@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {{--<div class="col-md-6 col-sm-4 col-xs-12">--}}
                {{--<div class="thumbnail">--}}
                    {{--<img src="http://placehold.it/120x120" alt="">--}}
                    {{--<div class="caption">--}}
                        {{--<p>{{$user->name}}</p>--}}
                        {{--@if(Auth::user()->id!=$user->id)--}}
                            {{--@if(empty($follows))--}}
                                {{--<form method="POST" action="{{route('following.store')}}">--}}
                                    {{--<input type="hidden" name="following_id" value="{{$user->id}}">--}}
                                    {{--{{csrf_field()}}--}}
                                    {{--<button type="submit" class="btn-facebook" >Follow</button>--}}
                                {{--</form>--}}
                            {{--@endif--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="fb-profile">
                <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
                <img align="left" class="fb-image-profile thumbnail" src="http://placehold.it/120x120" alt="Profile image example"/>
                <div class="fb-profile-text">
                    <h1>{{$user->name}}</h1>
                    @if(Auth::user()->id!=$user->id)
                    @if(empty($follows))
                    <form method="POST" action="{{route('following.store')}}">
                    <input type="hidden" name="following_id" value="{{$user->id}}">
                    {{csrf_field()}}
                    <button type="submit" class="btn-facebook" >Follow</button>
                    </form>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection