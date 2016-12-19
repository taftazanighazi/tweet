@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="panel-default">
                <div class="panel-heading">
                    <h3>Following {{$users->name}}</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th width="1px">No</th>
                            <th width="4px">Nama</th>
                        </tr>
                        <tbody>
                        <?php
                        $i=1;
                        ?>
                        @foreach($followings as $following)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$following->name}}</td>
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