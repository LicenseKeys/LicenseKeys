<template>
<div class="container container-border">
  <form id="editUser" action="" method="POST">
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="editfname" v-bind:value="$store.state.userProfile.fname">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="editlname" v-bind:value="$store.state.userProfile.lname">
      </div>
    </div>
    <div class="form-group row">
      <label for="editEmail" class="col-sm-2 col-form-label">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="editemail" v-bind:value="$store.state.userProfile.email">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Username:</label>
      <div class="col-sm-10">
        <input type="username" class="form-control" id="editusername" v-bind:value="$store.state.userProfile.username">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">User Created:</label>
      <div class="col-sm-10">
        <div>
           {{ $store.state.userProfile.created_at }}
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Last Updated:</label>
      <div class="col-sm-10">
        <div>
           {{ $store.state.userProfile.updated_at }}
        </div>
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
  name: 'app',
  methods: {
   logOut() {
     axios.post('/logout');
     window.location.href = '/login';
   }
  },
}
</script>
