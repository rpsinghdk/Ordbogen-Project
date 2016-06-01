@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    <h5><strong>Name:</strong> {!! auth()->user()->name !!}</h5>
                    <h5><strong>Email:</strong> {!! auth()->user()->email !!}</h5>
                    <h5><strong>Last Login:</strong> {!! auth()->user()->last_login ? auth()->user()->last_login .' ('. auth()->user()->last_login->diffForHumans() .')': 'Never' !!}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
