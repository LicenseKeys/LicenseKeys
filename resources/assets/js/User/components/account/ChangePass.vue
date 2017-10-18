<template>
<div class="container container-border">
    <div id="status"></div>
    <form>
        <div class="form-group">
            <label for="current-password">Current Password</label>
            <input type="password" class="form-control" id="current-password" name="current-password" v-model="password.current">
        </div> 
        <div class="form-group">
            <label for="new-password">New Password</label>
            <input type="password" class="form-control" id="new-password" name="new-password" v-model="password.new">
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm New Password</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password" v-model="password.confirm">
        </div>
        <button type="submit" class="btn btn-primary" @click.prevent="updatePassword">
         Change Password
        </button>
    </form> 
</div>
</template>

<script>
    export default {
        data() {
            return{
                password: {
                    current: '',
                    new:'',
                    confirm: ''
                },
                classes: {
                    error: ['alert', 'alert-danger'],
                    success: ['alert', 'alert-success']
                }
            }
        },
        methods: {
            updatePassword() {
                let div = document.getElementById('status')
                if(this.password.current.length >= 1 && this.password.new.length >= 1 && this.password.confirm.length >= 1){
                    axios.post('/api/user/update/pass', {
                        oldpass: this.password.current,
                        newpass: this.password.new,
                        newpassconf: this.password.confirm
                    }).then(function(response){
                        if(div.classList.contains(...this.classes.error)){
                            div.innerHTML = ''
                            div.classList.remove(...this.classes.error)
                        }
                        div.classList.add(...this.classes.success)
                        div.innerHTML('Password Changed')
                    }).catch(function(err){

                    })
                } else {
                    div.innerHTML = 'You Must Complete All Fields'
                    div.classList.add(...this.classes.error)
                }
            }
        }
    }
</script>
