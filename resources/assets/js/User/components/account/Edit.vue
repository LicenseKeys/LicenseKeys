<template>
<div class="container container-border">
  <form id="editUser">
    <div id="form_success" role="alert"></div>
    <div class="form-group row">
      <label for="fname" class="col-sm-2 col-form-label">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fname" v-model="userInfo.fname">
      </div>
    </div>
    <div class="form-group row">
      <label for="lname" class="col-sm-2 col-form-label">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lname" v-model="userInfo.lname">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" v-model="userInfo.email">
        <div id="error_email" class="col-sm-12 text-muted"></div>
      </div>
    </div>
    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username:</label>
      <div class="col-sm-10">
        <input type="username" class="form-control" id="username" v-model="userInfo.username">
        <div id="error_username" class="col-sm-12 text-muted"></div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">User Created:</label>
      <div class="col-sm-10">
        <div>
           {{ $store.state.userProfile.created_at }}
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Last Updated:</label>
      <div class="col-sm-10">
        <div>
           {{ $store.state.userProfile.updated_at }}
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary" @click.prevent="updateUser">Update Information</button>
      </div>
    </div>
  </form>
</div>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
  name: 'app',
  methods: {
   updateUser(){
     this.$store.dispatch('UPDATE_USER', this.userInfo)
   }
  }, 
  computed: {
    ...mapGetters({
        userInfo: 'userProfile'
    }),
  },
}
</script>

