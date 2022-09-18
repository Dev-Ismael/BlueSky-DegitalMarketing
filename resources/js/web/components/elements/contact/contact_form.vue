<template>

    <section class="contact-us-section ptb-100">
        <div class="container contact">
            <div class="col-12 pb-3 message-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form action="#" method="POST" id="contactForm" class="contact-us-form" novalidate="true">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" required/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn secondary-solid-btn disabled" id="btnContactUs" style="pointer-events: all; cursor: pointer;">
                                        Send Message
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

                        <a href="#" class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

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


        },

    }
</script>
