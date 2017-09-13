@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card bg-light">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="fname">First Name</label>
                            <input type="fname" class="form-control" id="fname" name="fname">
                            @if ($errors->has('fname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fname') }}</strong>
                                </span>
                            @endif
                        </div> 
                        <div class="form-group {{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label for="lname">Last Name</label>
                            <input type="lname" class="form-control" id="lname" name="lastname">
                            @if ($errors->has('lname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lname') }}</strong>
                                </span>
                            @endif
                        </div> 
                        <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username">Username</label>
                            <input type="username" class="form-control" id="username" name="username">
                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>                          
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
