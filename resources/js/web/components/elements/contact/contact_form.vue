<template>

    <section class="contact-us-section ptb-100">
        <div class="container contact">
            <div class="col-12 pb-3 messege-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form @submit.prevent=" storeMessege() "
                        enctype="multipart/form-data" method="POST" id="contactForm" class="contact-us-form">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class=" errors.name ? 'border-danger' : ''  " name="name" v-model="messege.name" placeholder="Company Name..." />
                                        <small class="text-danger" v-if="errors.name"> {{errors.name[0] }}</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" :class=" errors.email ? 'border-danger' : ''  " name="email"  v-model="messege.email" placeholder="E-mail Address..." />
                                        <small class="text-danger" v-if="errors.email"> {{errors.email[0] }}</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea  id="body" name="body" :class=" errors.body ? 'border-danger' : ''  " class="form-control"  v-model="messege.body" rows="7" cols="25" placeholder="Messege..." ></textarea>
                                        <small class="text-danger" v-if="errors.body"> {{errors.body[0] }}</small>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn secondary-solid-btn disabled" id="btnContactUs" style="pointer-events: all; cursor: pointer;">
                                        Send messege
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a excellent Business idea?</h2>
                        <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                        <a :href=" settings.location " target="_blank" class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Our Headquarters</h5>
                        <span>Address: <a class="text-muted" :href=" settings.location " target="_blank"> {{ settings.address }} </a> </span> <br>
                        <span>Phone: <a class="text-muted" :href=" 'tel:' + settings.phone_formatted "> {{ settings.phone }} </a> </span> <br>
                        <span>Email: <a class="text-muted" :href=" 'mailto:' + settings.email "> {{ settings.email }} </a> </span>

                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    import axios from 'axios';
    export default {

        data() {
            return {
                messege: {
                    name: '',
                    email: '',
                    body: '',
                },
                settings: {},
                errors: {},     // create empty object to insert errors in it to show
            }
        },
        mounted() {
            this.showSettings();
        },
        methods: {


            /*======================================================
            ====== GET Settings
            ======================================================*/
            showSettings() {
                axios.get('/api/settings/')
                    .then(
                        response => {
                            // console.log(response.data);
                            if (response.data.status == "success") {
                                this.settings = response.data.data
                            }
                        }
                    )
                    .catch(
                        error => console.log(error)
                    )
            },



            /*======================================================
            ====== store Messege
            ======================================================*/

            storeMessege() {


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
                const inputs = ['name', 'email', 'body'];


                // For Loop To append every item in inputs array
                inputs.forEach(input => {
                    formData.append(String(input), this.messege[input]);
                });


                // Send request with axios
                axios.post("/api/messege/store" , formData, config)
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
                                    window.location.href = '/';
                                }, 2000);

                            }
                            // if response validation error
                            else if (response.data.status == "error" && response.data.msg == "validation failed") {

                                this.errors = response.data.errors

                            }
                            // if Settings not Found
                            else if (response.data.status == "error") {

                                // Sweet Alert
                                this.$swal({
                                    position: 'top-end',
                                    icon: response.data.status,
                                    text: response.data.msg,
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                            }

                        }
                    )
                    .catch(error => console.log(error));
            },

        },

    }
</script>
