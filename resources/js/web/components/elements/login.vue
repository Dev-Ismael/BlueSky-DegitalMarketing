<template>

    <!--hero background image with content slider start-->
    <section class="hero-section hero-bg-2 ptb-100 full-screen">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">Welcome Back !</h1>
                        <p class="lead">
                            Keep your face always toward the sunshine - and shadows will fall behind you.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h5 class="h3">Login</h5>
                                <p class="text-muted mb-0">Sign in to your account to continue.</p>
                            </div>

                            <!--login form-->
                            <form class="login-signup-form" @submit.prevent=" login() "
                            enctype="multipart/form-data" method="POST" >
                                <div class="form-group">
                                    <label class="pb-1">Email Address</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-email color-primary"></span>
                                        </div>
                                        <input type="email" name="email" class="form-control"  :class=" errors.email ? 'border-danger' : ''  "  v-model="auth.email" placeholder="Enter your email..." autocomplete="off" />
                                    </div>
                                    <small class="text-danger" v-if="errors.email"> {{errors.email[0] }}</small>
                                    <small class="text-danger" v-if="errors.credentials"> {{errors.credentials }}</small>
                                </div>
                                <!-- Password -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label class="pb-1">Password</label>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input type="password" name="password" class="form-control"  :class=" errors.password ? 'border-danger' : ''  "  v-model="auth.password"  placeholder="Enter your password..." autocomplete="off" />
                                    </div>
                                    <small class="text-danger" v-if="errors.password"> {{errors.password[0] }}</small>
                                </div>

                                <!-- Submit -->
                                <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                                    Sign in
                                </button>

                            </form>
                        </div>
                        <!-- <div class="card-footer bg-transparent border-top px-md-5"><small>Not registered?</small>
                            <a href="sign-up.html" class="small"> Create account</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero background image with content slider end-->
</template>
<script>

    import axios from 'axios';

    export default {
        data() {
            return {
                auth: {
                    email: '',
                    password: ''
                },
                errors: {}
            }
        },
        methods: {

            /*======================================================
            ====== Login opration
            ======================================================*/

            login() {


                // Set Config var to send it with data request
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                    }
                }


                // set var from FormData Class
                let formData = new FormData();


                // Array of inputs
                const inputs = ['email', 'password'];


                // For Loop To append every item in inputs array
                inputs.forEach(input => {
                    formData.append(String(input), this.auth[input]);
                });


                // Send request with axios
                axios.post("/login" , formData, config)
                    .then(
                        response => {  // if there success request

                            // console.log(response.data);

                            // if response status
                            if (response.data.status == "success") {


                                // Sweet Alert
                                this.$swal({
                                    position: 'top-end',
                                    icon: response.data.status,
                                    text: response.data.msg,
                                    showConfirmButton: false,
                                    timer: 2000
                                });


                                // redirect to home page
                                setTimeout(function () {
                                    window.location.href = '/admin/dashboard';
                                }, 2000);

                            }
                            // if response validation error
                            else if (response.data.status == "error" && response.data.msg == "validation failed") {

                                this.errors = response.data.errors

                            }
                            // if Settings not Found
                            else if (response.data.status == "error" && response.data.msg == "invalid credentials") {

                                this.errors = response.data.errors

                            }

                        }
                    )
                    .catch(error => console.log(error));
            },

        },
    }
</script>
