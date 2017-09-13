@extends('layouts.app')
@section('title')
Login
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
                <div class="card bg-light">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="user@app.com">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div> 
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                                Remember Me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
