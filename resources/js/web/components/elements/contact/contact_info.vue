<template>
    <section class="contact-us-promo pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <img src="/digimark_template/img/contact-feature/call.gif" alt="call" width="80">
                            </div>
                            <div><h5 class="mb-0">Call Us</h5>
                                <a class="text-muted" :href=" 'tel:' + settings.phone_formatted "> {{ settings.phone }} </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <img src="/digimark_template/img/contact-feature/location.gif" alt="call" width="80">
                            </div>
                            <div><h5 class="mb-0">Visit Us</h5>
                                <p class="text-muted mb-0">
                                    <a class="text-muted" :href="settings.location" target="_blank"> {{ settings.address }} </a>
                                </p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <img src="/digimark_template/img/contact-feature/messege.gif" alt="call" width="80">
                            </div>
                            <div><h5 class="mb-0">Mail Us</h5>
                                <p class="text-muted mb-0">
                                    <a class="text-muted" :href=" 'mailto:' + settings.email "> {{ settings.email }} </a>
                                </p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="pb-2">
                                <img src="/digimark_template/img/contact-feature/headphones.gif" alt="call" width="80">
                            </div>
                            <div><h5 class="mb-0">Live Chat</h5>
                                <p class="text-muted mb-0">Chat with Us 24/7</p></div>
                        </div>
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
