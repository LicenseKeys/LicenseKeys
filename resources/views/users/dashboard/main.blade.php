@extends('users.home')
@section('title')
Dashboard
@endsection
@section('dashboardcontent')
<div class="container">
  <div class="row">
      <div class="col-lg-3">
          <div class="col-sm-12 tile-side">
            <a href="{{ route('user.useredit') }}">
              <div class="icon"><span class="fa fa-fw fa-user fa-2x align-middle"></span></div>
              <div class="title align-middle">Your Info</div>
              <div class="highlight bg-color-red"></div>
            </a>
          </div>
      </div>
      <div class="col-lg-9 main-content">
          <div class="row">
          <div class="col-lg-4 col-sm-6 no-gutters tile">
            <a href="{{ route('user.services') }}">
              <div class="icon"><span class="fa fa-fw fa-th fa-lg"></span></div>
              <div class="stat">0</div>
              <div class="title">Services</div>
              <div class="highlight bg-color-gold"></div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6 no-gutters tile">
            <a href="{{ route('user.support') }}">
              <div class="icon"><span class="fa fa-fw fa-comments fa-lg"></span></div>
              <div class="stat">0</div>
              <div class="title">Support Tickets</div>
              <div class="highlight bg-color-blue"></div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-12 no-gutters tile">
            <a href="{{ route('user.invoices') }}">
              <div class="icon"><span class="fa fa-fw fa-credit-card-alt fa-lg"></span></div>
              <div class="stat">0</div>
              <div class="title">Invoices</div>
              <div class="highlight bg-color-green"></div>
            </a>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
