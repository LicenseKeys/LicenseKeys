<template>
<div class="container container-border">
  <div id="response"></div>
  <form id="editUser" action="" method="POST">
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="editfname" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="editlname">
      </div>
    </div>
    <div class="form-group row">
      <label for="editEmail" class="col-sm-2 col-form-label">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="editemail">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Username:</label>
      <div class="col-sm-10">
        <input type="username" class="form-control" id="editusername">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">User Created:</label>
      <div class="col-sm-10">
        <div></div>
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Last Updated:</label>
      <div class="col-sm-10">
        <div></div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Update Information</button>
      </div>
    </div>
  </form>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
