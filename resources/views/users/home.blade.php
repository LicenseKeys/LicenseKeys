@extends('layouts.app')
@section('content')
<div class="container">
  <nav class="navbar navbar-toggleable-md navbar-user">
      <div class="navbar-header">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#user-nav" aria-controls="user-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="user-nav">
        <ul class="nav navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="{{route('user.home')}}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('user.services')}}">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('user.support')}}">Support</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('user.invoices')}}">Invoices</a></li>
        </ul>
        <ul class="nav navbar-nav my-2 my-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{Auth::user()->fname}}! <span class="caret"></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="{{ route('user.useredit') }}">Edit Account Details</a>
              <a class="dropdown-item" href="{{ route('user.passedit') }}">Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
          </li>
        </ul>
      </div>
  </nav>
</div>
<div class="container">
  @yield('dashboardcontent')
</div>
@endsection
