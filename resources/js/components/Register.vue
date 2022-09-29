<template>
    <div class="container">
        <div class="row login-form">
            <aside class="col-sm-4 div-center"></aside>
            <aside class="col-sm-6 div-center">

                <div class="card">
                    <article class="card-body">
                        <h4 class="card-title text-center mb-4 mt-1">
                           

                        </h4>
                        <hr>
                        <form>
                            <div class="form-group">
                                 <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input  class="form-control" placeholder="Complete Name"  v-model="form.name" type="text" name="name">
                                </div> <!-- input-group.// -->
                            </div>
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input  class="form-control" placeholder="Email or login"  v-model="form.email" type="text" name="email">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input class="form-control" placeholder="******" v-model="form.password" type="password" name="password">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">

                             <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input  class="form-control" placeholder="Confirm Password"  v-model="form.password_confirmation" type="text" name="password_c">
                                </div> <!-- input-group.// -->
                                </div>
                            <div class="form-group">
                                <button @click.prevent="saveForm" type="submit" class="btn btn-primary btn-block btn-flat btn-md" style="border-radius:5px;">
                                    <i class="fa fa-sign-in"></i> Sign In
                                </button>
                            </div> <!-- form-group// -->
                           
                        </form>
                    </article>
                </div> <!-- card.// -->

            </aside>
            <aside class="col-sm-4 div-center"></aside>
        </div>

    </div>
</template>
<style>
.login-form {
    margin-top: 10%;
}
</style>
<script>
import axios from 'axios'

export default{
    data(){
        return{
            form:{
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            },
            errors:[]
        }

    },
    methods:{
        saveForm(){
            axios.post('/api/register',this.form).then(() => {
                console.log('save');
            }).catch((error) => {
                this.errors = error.response.data.errors;
            })
        }
    }
}
</script>