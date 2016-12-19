@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Follower {{$user->name}}</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                        </tr>
                        <tbody>
                        <?php
                        $i=1;
                        ?>
                        @foreach($followers as $follower)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$follower->name}}</td>
                        </tr>

                        <?php
                        $i++;
                        ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection