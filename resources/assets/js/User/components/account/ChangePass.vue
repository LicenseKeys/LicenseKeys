<template>
<div class="container container-border">
    <form role="form">
        <div class="form-group">
            <label for="current-password">Current Password</label>
            <input type="password" class="form-control" id="current-password" name="current-password">
        </div> 
        <div class="form-group">
            <label for="new-password">New Password</label>
            <input type="password" class="form-control" id="new-password" name="new-password">
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm New Password</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password">
        </div>
        <button type="submit" class="btn btn-primary">
         Change Password
        </button>
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
