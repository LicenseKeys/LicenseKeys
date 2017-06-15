@extends('users.home')
@section('title')
Edit Account
@endsection
@section('dashboardcontent')
<div class="container">
  <div class="row">
    <form class="form-group">
      <input value="{{ $user->fname }}">
      <input value="{{ $user->lname }}">
      <input value="{{ $user->email }}">
      <input value="{{ $user->username }}">
      <input value="{{ $user->created_at }}">
      <input value="{{ $user->updated_at }}">
    </form>
  </div>
</div>
@endsection
