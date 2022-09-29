<template>
    <div class="container">
        <div class="row login-form">
            <aside class="col-sm-4 div-center"></aside>
            <aside class="col-sm-4 div-center">

                <div class="card">
                    <article class="card-body">
                        <h4 class="card-title text-center mb-4 mt-1">
                            <img src="http://fas.calabarzon.dilg.gov.ph/images/logoin.jpg"
                                style="width: 100%; height: auto; border-radius: 5px;">

                        </h4>
                        <hr>
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input  class="form-control" placeholder="username"  v-model="form.email" type="text" name="email">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" placeholder="******" v-model="form.password" type="password" name="password">
                                </div> <!-- input-group.// -->
                            </div> <!-- form-group// -->
                            <div class="form-group">
                                <button @click.prevent="loginUser" type="submit" class="btn btn-block btn-flat btn-md btn-style1" style="border-radius:5px;">
                                    <i class="fa fa-sign-in"></i> Sign In
                                </button>
                            </div> <!-- form-group// -->
                            <p class="text-center" style="font-size:9pt; padding-top:2%;">
                                DILG IV-A Regional Information and Communications Technology Unit (RICTU) © 2019 All
                                Right Reserved .
                            </p>
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

.card-body{
    background-color: rgb(226, 219, 242);
}
.btn-style1{
    background-color:#3e4684;
    color: #fff;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    outline:none;

}
</style>
<script>
import axios from 'axios'


export default {
    data() {
        return {
            form: {
                email: '',
                password: '',
            },
            errors: []
        }
    },
    methods: {
        loginUser() {
            axios.post('/api/login', this.form).then(() => {
                this.$router.push({ name: 'Dashboard' });
            }).catch((error) => {
                console.log(error);
            })
        }
    }
}
</script>