<template>
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-user">
      <div class="navbar-header">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#user-nav" aria-controls="user-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="user-nav">
        <ul class="nav navbar-nav mr-auto">
          <router-link :to="{ name: 'Home' }" class="nav-link">Home</router-link>
          <router-link :to="{ name: 'Services' }" class="nav-link">Services</router-link>
          <router-link :to="{ name: 'Support' }" class="nav-link">Support</router-link>
          <router-link :to="{ name: 'Invoices' }" class="nav-link">Invoices</router-link>
        </ul>
        <ul class="nav navbar-nav my-2 my-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, {{ $store.state.userProfile.fname }}! <span class="caret"></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <router-link :to="{ name: 'EditAccount' }" class="dropdown-item">Edit Account Details</router-link>
              <router-link :to="{ name: 'ChangePass' }" class="dropdown-item">Change Password</router-link>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" v-on:click="logOut">Logout</a>
            </div>
          </li>
        </ul>
      </div>
  </nav>
  <div class="content">
    <router-view></router-view>
  </div>
  </div>
</template>

<script>
export default {
  name: 'app',
  methods: {
   logOut() {
     axios.post('/logout')
   }
  },
}
</script>