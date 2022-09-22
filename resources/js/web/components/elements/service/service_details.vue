<template>

    <section class="service-details-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="service-details-wrap">
                        <img :src=" '/images/services/'+ service.img " alt="service-image" class="img-fluid rounded shadow-sm">
                        <div class="services-detail-content mt-4">
                            <h4> {{ service.title }} </h4>
                            <span class="content" v-html="service.content"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="sidebar-right pl-4">

                        <!--all services list-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h5>All Services</h5>
                            </div>
                            <ul class="all-service-list">
                                <li v-for=" service in services " :key="service.id"><a :href=" '/service/' + service.slug "> {{ service.title }} </a></li>
                            </ul>
                        </aside>

                        <!--need help-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h5>Need Help?</h5>
                            </div>
                            <p>We are available in 24/7 hours for dedicated support</p>
                            <ul class="primary-list mt-25">
                                <li>
                                    <span class="ti-location-pin mr-2 color-primary"></span>
                                    <a :href="settings.location" class="d-inline" target="_blank"> {{ settings.address }} </a>
                                </li>
                                <li class="d-flex">
                                    <span class="ti-mobile mr-2 color-primary"></span>
                                    <a :href=" 'tel:' + settings.phone_formatted "> {{ settings.phone }} </a>
                                    &nbsp; - &nbsp;
                                    <a href="tel:+20034249015"> (20) 03 4249015 </a>
                                </li>
                                <li>
                                    <span class="ti-email mr-2 color-primary"></span>
                                    <a :href=" 'mailto:' + settings.email " class="d-inline" > {{ settings.email }} </a>
                                </li>
                            </ul>
                        </aside>

                        <!-- Subscribe widget-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h5>Newsletter</h5>
                            </div>
                            <p>Enter your email address below to subscribe to my newsletter</p>
                            <form @submit.prevent=" storeSubscriber() "
                            enctype="multipart/form-data" method="POST" class="d-none d-md-block d-lg-block">
                                <input type="email" class="form-control input" id="email-footer" name="email"
                                    placeholder="info@yourdomain.com" required v-model="email">
                                <button type="submit"
                                    class="btn secondary-solid-btn btn-block btn-not-rounded mt-3">Subscribe
                                </button>
                            </form>
                            <small class="text-danger" v-if="errors.email"> {{errors.email[0] }}</small>
                        </aside>

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
            service: '',
            services: '',
            settings: {},
            email: '',
            errors: {},     // create empty object to insert errors in it to show

        }
    },
    mounted(){
        this.getServices();
        this.showService();
        this.showSettings();
    },
    methods: {

        /*======================================================
        ====== GET Services
        ======================================================*/
        getServices() {
            axios.get('/api/services')
            .then(
                response => {
                    this.services = response.data.data
                }
            )
            .catch(
                error => console.log(error)
            )
        },

        /*======================================================
        ====== Show Service
        ======================================================*/
        showService() {

            const slug = window.location.pathname.replace('/service/','');
            axios.get('/api/service/show/' + slug )
            .then(
                response => {
                    // console.log( response.data )
                    if (response.data.status == "success") {
                        this.service = response.data.data
                    } else if (response.data.status == "error") {
                        window.location.href = '/';
                    }
                }
            )
            .catch(
                error => console.log(error)
            )

        },





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
