<template>
<div class="container">
  <div class="row">
      <div class="col-md-3">
          <div class="col-sm-12 tile-side">
            <router-link :to="{ name: 'EditAccount' }">
              <div class="icon"><span class="fa fa-fw fa-user fa-2x align-middle"></span></div>
              <div class="title align-middle">Your Info</div>
              <div class="highlight bg-color-red"></div>
            </router-link>
          </div>
      </div>
      <div class="col-md-9 main-content">
          <div class="row">
          <div class="col-lg-4 col-sm-6 no-gutters tile">          
            <router-link :to="{ name: 'Services' }">
              <div class="icon"><span class="fa fa-fw fa-th fa-lg"></span></div>
              <div class="stat">0</div>
              <div class="title">Services</div>
              <div class="highlight bg-color-gold"></div>
            </router-link>
          </div>
          <div class="col-lg-4 col-sm-6 no-gutters tile">
            <router-link :to="{ name: 'Support' }">
              <div class="icon"><span class="fa fa-fw fa-comments fa-lg"></span></div>
              <div class="stat">0</div>
              <div class="title">Support Tickets</div>
              <div class="highlight bg-color-blue"></div>
            </router-link>
          </div>
          <div class="col-lg-4 col-sm-12 no-gutters tile">
            <router-link :to="{ name: 'Invoices'}">
              <div class="icon"><span class="fa fa-fw fa-credit-card-alt fa-lg"></span></div>
              <div class="stat">0</div>
              <div class="title">Invoices</div>
              <div class="highlight bg-color-green"></div>
            </router-link>
          </div>
        </div>
      </div>
  </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
