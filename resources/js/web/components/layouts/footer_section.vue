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
                                                    <a href="#" class="rounded"><span class="ti-facebook"></span></a>
                                                    <div class="tooltip-item">Facebook</div>
                                                </li>
                                                <li class="list-inline-item tooltip-hover"><a href="#"
                                                        class="rounded"><span class="ti-twitter"></span></a>
                                                    <div class="tooltip-item">Twitter</div>
                                                </li>
                                                <li class="list-inline-item tooltip-hover"><a href="#"
                                                        class="rounded"><span class="ti-linkedin"></span></a>
                                                    <div class="tooltip-item">Linkedin</div>
                                                </li>
                                                <li class="list-inline-item tooltip-hover"><a href="#"
                                                        class="rounded"><span class="ti-dribbble"></span></a>
                                                    <div class="tooltip-item">Dribbble</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                                    <div>
                                        <h5 class="text-white"> <i class="fa-solid fa-seedling"></i> Our Goal</h5>
                                        <p class="text-white"> {{ settings.footer_content }} </p>
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
                                            </li>
                                        </ul>
                                        <form class="newsletter-form mt-3">
                                            <input type="text" class="input-newsletter" placeholder="Enter your email"
                                                name="EMAIL" required autocomplete="off">
                                            <button type="submit" class="disabled"
                                                style="pointer-events: all; cursor: pointer;"><i
                                                    class="fas fa-paper-plane"></i></button>
                                        </form>
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
