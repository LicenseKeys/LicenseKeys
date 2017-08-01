@extends('users.home')
@section('title')
Change Password
@endsection
@section('dashboardcontent')
<div class="container container-border">
  <div id="response"></div>
  <form id="changePass" action="" method="POST">
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Old Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="oldpass">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">New Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="newpass">
      </div>
    </div>
    <div class="form-group row">
      <label for="editEmail" class="col-sm-2 col-form-label">Confirm New Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="newpassconfirm">
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
  $('#changePass').on('submit', function(u){
    u.preventDefault();
    var oldpass = $('#oldpass').val();
    var newpass = $('#newpass').val();
    var newpasscon = $('#newpassconfirm').val();
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      type: "POST",
      url: "{{ route('user.passupdate') }}",
      data: { _token: token, oldpass: oldpass, newpass:newpass, newpasscon: newpasscon }
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