<template>


    <!----------  pricing ------------>
    <section class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary">Our Pricing</strong>
                        <h2>Flexible Price</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">
                            Professional hosting at an affordable price. Distinctively recaptiualize principle-centered
                            core competencies through client-centered
                            core competencies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="switch-wrap text-center mb-5">
                        <label class="form-switch">
                            <span class="beforeinput text-success year-switch">
                                Monthly
                            </span>
                            <input type="checkbox" id="js-contcheckbox">
                            <span class="switch-icon gray-light-bg"></span>
                            <span class="afterinput year-switch">
                                Yearly
                            </span>
                        </label>
                    </div>
                </div>

                <!------------- Standard ---------------->
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="/digimark_template/img/priching-img-1.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price-us" v-if=" visitorCountry == 'EG' ">
                                <div class="price text-center mb-0 monthly-price"><span>EGP</span>{{ Number(plan.standard.price.eg.monthly) - 1 }}<span>.99</span></div>
                                <div class="price text-center mb-0 yearly-price"><span>EGP</span>{{ Number(plan.standard.price.eg.yearly) - 1 }}<span>.99</span></div>
                            </div>
                            <div class="price-us" v-else>
                                <div class="price text-center mb-0 monthly-price">${{ Number(plan.standard.price.us.monthly) - 1 }}<span>.99</span></div>
                                <div class="price text-center mb-0 yearly-price">${{ Number(plan.standard.price.us.yearly) - 1 }}<span>.99</span></div>
                            </div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">Standard</h5>
                        </div>
                        <div class="card-body">
                            <span class="mb-3 mt-3 plan-pricing-content" v-html="plan.standard.content"></span>
                            <a href="/contact" class="btn outline-btn mb-3 mt-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>


                <!------------- Premium ---------------->
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card popular-price text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="/digimark_template/img/priching-img-2.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price-us" v-if=" visitorCountry == 'EG' ">
                                <div class="price text-center mb-0 monthly-price"><span>EGP</span>{{ Number(plan.premium.price.eg.monthly) - 1 }}<span>.99</span></div>
                                <div class="price text-center mb-0 yearly-price"><span>EGP</span>{{ Number(plan.premium.price.eg.yearly) - 1 }}<span>.99</span></div>
                            </div>
                            <div class="price-us" v-else>
                                <div class="price text-center mb-0 monthly-price">${{ Number(plan.premium.price.us.monthly) - 1 }}<span>.99</span></div>
                                <div class="price text-center mb-0 yearly-price">${{ Number(plan.premium.price.us.yearly) - 1 }}<span>.99</span></div>
                            </div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">Premium</h5>
                        </div>
                        <div class="card-body">
                            <span class="mb-3 mt-3 plan-pricing-content" v-html="plan.premium.content"></span>
                            <a href="/contact" class="btn secondary-solid-btn mb-3 mt-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>



                <!------------- Unlimited ---------------->
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="/digimark_template/img/priching-img-3.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price-us" v-if=" visitorCountry == 'EG' ">
                                <div class="price text-center mb-0 monthly-price"><span>EGP</span>{{ Number(plan.unlimited.price.eg.monthly) - 1 }}<span>.99</span></div>
                                <div class="price text-center mb-0 yearly-price"><span>EGP</span>{{ Number(plan.unlimited.price.eg.yearly) - 1 }}<span>.99</span></div>
                            </div>
                            <div class="price-us" v-else>
                                <div class="price text-center mb-0 monthly-price">${{ Number(plan.unlimited.price.us.monthly) - 1 }}<span>.99</span></div>
                                <div class="price text-center mb-0 yearly-price">${{ Number(plan.unlimited.price.us.yearly) - 1 }}<span>.99</span></div>
                            </div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">Unlimited</h5>
                        </div>
                        <div class="card-body">
                            <span class="mb-3 mt-3 plan-pricing-content" v-html="plan.unlimited.content"></span>
                            <a href="/contact" class="btn outline-btn mb-3 mt-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="support-cta text-center mt-5">
                        <h5 class="mb-1"><span class="ti-headphone-alt color-primary mr-3"></span>We're Here to Help You
                        </h5>
                        <p>Have some questions? <a href="/contact">Chat with us now</a>, or
                            <a :href=" 'mailto:' + settings.email "> send us an email </a>
                            get in touch.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</template>
<script>
    import axios from 'axios';
    export default {
        props:{
            visitorCountry: {
                type: String,
                required: true
            },
        },
        data() {
            return {
                settings: {},
                plan: {
                    standard: {
                        price: {
                            us: {
                                monthly: '',
                                yearly: '',
                            },
                            eg: {
                                monthly: '',
                                yearly: '',
                            }
                        },
                        content: ''
                    },
                    premium: {
                        price: {
                            us: {
                                monthly: '',
                                yearly: '',
                            },
                            eg: {
                                monthly: '',
                                yearly: '',
                            }
                        },
                        content: ''
                    },
                    unlimited: {
                        price: {
                            us: {
                                monthly: '',
                                yearly: '',
                            },
                            eg: {
                                monthly: '',
                                yearly: '',
                            }
                        },
                        content: ''
                    },
                },
            }
        },
        mounted() {
            this.showPlan();
            this.showSettings();
        },
        methods: {


            /*======================================================
            ====== GET Plan
            ======================================================*/
            showPlan() {
                axios.get('/api/admin/plan/')
                    .then(
                        response => {
                            // console.log(response.data.data);
                            this.plan = response.data.data
                        }
                    )
                    .catch(
                        error => console.log(error)
                    )
            },



            /*======================================================
            ====== GET Setting
            ======================================================*/
            showSettings() {
                axios.get('/api/settings/')
                    .then(
                        response => {
                            // console.log(response.data.data);
                            this.settings = response.data.data
                        }
                    )
                    .catch(
                        error => console.log(error)
                    )
            },


        }
    }
</script>
