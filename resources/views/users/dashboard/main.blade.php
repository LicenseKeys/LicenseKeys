@extends('users.home')
@section('title')
Dashboard
@endsection
@section('dashboardcontent')
<div class="row">
    <div class="col-md-3 pull-md-left">
      <div class="col-sm-12 tile info">
        <a href="">
          <div class="icon"><span class="fa fa-fw fa-heart"></span></div>
          <div class="title">Your Info</div>
          <div class="highlight bg-color-red"></div>
        </a>
      </div>
    </div>
    <div class="col-md-9 pull-md-right main-content row">
      <div class="col-md-4 col-sm-6 tile">
        <a href="{{ route('user.services') }}">
          <div class="icon"><span class="fa fa-fw fa-th"></span></div>
          <div class="stat">0</div>
          <div class="title">Services</div>
          <div class="highlight bg-color-gold"></div>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 tile">
        <a href="{{ route('user.support') }}">
          <div class="icon"><span class="fa fa-fw fa-comments"></span></div>
          <div class="stat">0</div>
          <div class="title">Support Tickets</div>
          <div class="highlight bg-color-blue"></div>
        </a>
      </div>
      <div class="col-md-4 col-sm-12 tile">
        <a href="{{ route('user.invoices') }}">
          <div class="icon"><span class="fa fa-fw fa-credit-card-alt"></span></div>
          <div class="stat">0</div>
          <div class="title">Invoices</div>
          <div class="highlight bg-color-green"></div>
        </a>
      </div>
    </div>
</div>
@endsection
