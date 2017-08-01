@extends('users.home')
@section('title')
Edit Account
@endsection
@section('dashboardcontent')
<div class="container container-border">
  <div id="response"></div>
  <form id="editUser" action="" method="POST">
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="editfname" value="{{$user->fname}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="editlname" value="{{$user->lname}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="editEmail" class="col-sm-2 col-form-label">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="editemail" value="{{$user->email}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Username:</label>
      <div class="col-sm-10">
        <input type="username" class="form-control" id="editusername" value="{{$user->username}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">User Created:</label>
      <div class="col-sm-10">
        <div>{{$user->created_at}}</div>
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Last Updated:</label>
      <div class="col-sm-10">
        <div>{{$user->updated_at}}</div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Update Information</button>
      </div>
    </div>
  </form>
</div>
@endsection
@section('javascript')
$(document).ready(function(){
  $('#editUser').on('submit', function(u){
    u.preventDefault();
    var fname = $('#editfname').val();
    var lname = $('#editlname').val();
    var email = $('#editemail').val();
    var username = $('#editusername').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      type: "POST",
      url: "{{ route('user.update') }}",
      data: { _token: token, fname: fname, lname: lname, email: email, username: username }
    }).done(function(r){
      //Displaying response from controller, will fade out after 5 seconds
      var d = $('#response');
      d.html(r);
      setTimeout(function(){
        d.html('');
      }, 5000);
    });
  });
});
@endsection