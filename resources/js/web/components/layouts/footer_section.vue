<template>
    <div class="footer">
        <!----------- Call Section ----------->
        <section class="call-to-action py-5 gray-light-bg">
            <div class="container">
                <div class="row justify-content-around align-items-center">
                    <div class="col-md-7">
                        <div class="subscribe-content">
                            <h3 class="mb-1">Consulting Agency for Your Business</h3>
                            <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-btn text-lg-right text-sm-left">
                            <a href="/contact" class="btn secondary-solid-btn">Contact With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <div class="footer-top gradient-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="row footer-top-wrap">
                                <div class="col-md-3 col-sm-12">
                                    <div class="footer-nav-wrap text-white text-center">
                                        <img src="/images/BlueSky-WhiteLogo.png" class="img-fluid logo" alt="logo">
                                        <!-- <p>Continually myocardinate inexpensive catalysts for change with seamless initiatives.</p> -->
                                        <div class="social-nav mt-4 text-center">
                                            <ul class="list-unstyled social-list mb-0">
                                                <li class="list-inline-item tooltip-hover">
                                                    <a :href="settings.facebook" target="_blank" class="rounded"><span class="ti-facebook"></span></a>
                                                    <div class="tooltip-item">Facebook</div>
                                                </li>
                                                <li class="list-inline-item tooltip-hover"><a :href="settings.twitter" target="_blank"
                                                        class="rounded"><span class="ti-twitter"></span></a>
                                                    <div class="tooltip-item">Twitter</div>
                                                </li>
                                                <li class="list-inline-item tooltip-hover"><a :href="settings.linkedin" target="_blank"
                                                        class="rounded"><span class="ti-linkedin"></span></a>
                                                    <div class="tooltip-item">Linkedin</div>
                                                </li>
                                                <li class="list-inline-item tooltip-hover"><a :href="settings.youtube" target="_blank"
                                                        class="rounded"><span class="ti-youtube"></span></a>
                                                    <div class="tooltip-item">Youtube</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                                    <div>
                                        <h5 class="text-white"> <i class="fa-solid fa-seedling"></i> Our Goal</h5>
                                        <p class="text-white" style="font-size: 13px;"> {{ settings.footer_content }} </p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="footer-nav-wrap text-white">
                                        <h5 class="text-white">GET IN TOUCH</h5>
                                        <ul class="get-in-touch-list">
                                            <li class="d-flex align-items-center py-1"><span
                                                    class="fas fa-map-marker-alt mr-2"></span>
                                                    <a :href="settings.location" target="_blank"> {{ settings.address }} </a>
                                            </li>
                                            <li class="d-flex align-items-center py-1"><span
                                                    class="fas fa-envelope mr-2"></span>
                                                    <a :href=" 'mailto:' + settings.email "> {{ settings.email }} </a>
                                            </li>
                                            <li class="d-flex align-items-center py-2"><span class="fas fa-phone-alt mr-2"></span>
                                                <a :href=" 'tel:' + settings.phone_formatted "> {{ settings.phone }} </a>
                                                &nbsp; - &nbsp;
                                                <a href="tel:+20034249015"> (20) 03 4249015 </a>
                                            </li>
                                        </ul>
                                        <form class="newsletter-form mt-3" @submit.prevent=" storeSubscriber() "
                                        enctype="multipart/form-data" method="POST" >
                                            <input type="email" class="input-newsletter" v-model="email" placeholder="Enter your email"
                                                name="email" required autocomplete="off">
                                            <button type="submit" class="disabled"
                                                style="pointer-events: all; cursor: pointer;"><i
                                                    class="fas fa-paper-plane"></i></button>
                                        </form>
                                        <small class="text-white" v-if="errors.email"> {{errors.email[0] }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer top end-->

        </footer>
        <!--footer section end-->


        <!--bottom to top button start-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fa-solid fa-turn-up" style="font-size: 24px"></i>
        </button>
        <!--bottom to top button end-->


        <div id="preloader">
            <div class="loader1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

    </div>
</template>
<script>
import axios from 'axios';
export default {

    data() {
        return {
            settings: {},
            email: '',
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
        ====== store Subscriber
        ======================================================*/

        storeSubscriber() {


            // Set Config var to send it with data request
            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                }
            }


            // set var from FormData Class
            let formData = new FormData();


            formData.append( 'email' , this.email );

            // Send request with axios
            axios.post("/api/subscriber/store" , formData, config)
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
