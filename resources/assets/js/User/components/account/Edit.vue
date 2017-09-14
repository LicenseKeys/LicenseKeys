<template>
<div class="container container-border">
  <form id="editUser" action="" method="POST">
    <div class="form-group row">
      <label for="fname" class="col-sm-2 col-form-label">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fname" v-model="fname">
      </div>
    </div>
    <div class="form-group row">
      <label for="lname" class="col-sm-2 col-form-label">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lname" v-model="lname">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" v-model="email">
      </div>
    </div>
    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username:</label>
      <div class="col-sm-10">
        <input type="username" class="form-control" id="username" v-model="username">
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
export default {
  name: 'app',
  methods: {
   logOut() {
     axios.post('/logout');
     window.location.href = '/login';
   },
   updateUser(){
     axios.post('/api/user/update', { fname: this.fname, lname: this.lname, email: this.email, username: this.username })
      .then(function(r){
        this.$store.dispatch('LOAD_USER_DATA')
      }).catch(function(error){
        console.log(error)
      });
   }
  }, 
  computed: {
    fname:{
      get(){ return this.$store.getters.fname; },
      set( value ){ this.$store.commit('UPDATE_FNAME', value); }
    },
    lname:{
      get(){ return this.$store.getters.lname; },
      set( value ){ this.$store.commit('UPDATE_LNAME', value); }
    },
    email:{
      get(){ return this.$store.getters.email; },
      set( value ){ this.$store.commit('UPDATE_EMAIL', value); }
    },
    username:{
      get(){ return this.$store.getters.username; },
      set( value ){ this.$store.commit('UPDATE_USERNAME', value); }
    }
  } 
}
</script>
