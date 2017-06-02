@extends('users.home')
@section('dashboardcontent')
</section>
<div class="container">
    <div class="spanner">
      <div class="title">Welcome back {{ Auth::user()->fname }} {{ Auth::user()->lname }}!</div>
    </div>
    <div class="row">
        <div class="col-md-3 pull-md-left">
          <div class="col-xs-12 tile info">
            <a href="">
              <div class="icon"><span class="glyphicon glyphicon-user"></span></div>
              <div class="title">Your Info</div>
              <div class="highlight bg-color-red"></div>
            </a>
          </div>
        </div>
        <div class="col-md-9 pull-md-right main-content">
          <div class="col-sm-4 col-xs-6 tile">
            <a href="{{ route('user.services') }}">
              <div class="icon"><span class="glyphicon glyphicon-th"></div>
              <div class="stat">0</div>
              <div class="title">Services</div>
              <div class="highlight bg-color-gold"></div>
            </a>
          </div>
          <div class="col-sm-4 col-xs-6 tile">
            <a href="{{ route('user.tickets') }}">
              <div class="icon"><span class="glyphicon glyphicon-comment"></div>
              <div class="stat">0</div>
              <div class="title">Tickets</div>
              <div class="highlight bg-color-blue"></div>
            </a>
          </div>
          <div class="col-sm-4 col-xs-12 tile">
            <a href="{{ route('user.invoices') }}">
              <div class="icon"><span class="glyphicon glyphicon-credit-card"></span></div>
              <div class="stat">0</div>
              <div class="title">Invoices</div>
              <div class="highlight bg-color-green"></div>
            </a>
          </div>
        </div>
    </div>
</div>
@endsection
