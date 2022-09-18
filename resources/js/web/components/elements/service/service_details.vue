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
                                <li v-for=" service in services " :key="service.id"><a :href=" '/' + service.slug "> {{ service.title }} </a></li>
                            </ul>
                        </aside>

                        <!--need help-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h5>Need Help?</h5>
                            </div>
                            <p>We are available in 24/7 hours for dedicated support</p>
                            <ul class="primary-list mt-25">
                                <li><span class="ti-location-pin mr-2 color-primary"></span> 123 Yellow House, Mn 9007
                                </li>
                                <li><span class="ti-mobile mr-2 color-primary"></span> (+123) 456-789-012</li>
                                <li><span class="ti-email mr-2 color-primary"></span> youname@domail.com</li>
                            </ul>
                        </aside>

                        <!-- Subscribe widget-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h5>Newsletter</h5>
                            </div>
                            <p>Enter your email address below to subscribe to my newsletter</p>
                            <form action="#" method="post" class="d-none d-md-block d-lg-block">
                                <input type="text" class="form-control input" id="email-footer" name="email"
                                    placeholder="info@yourdomain.com">
                                <button type="submit"
                                    class="btn secondary-solid-btn btn-block btn-not-rounded mt-3">Subscribe
                                </button>
                            </form>
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
            services: ''
        }
    },
    mounted(){
        this.getServices();
        this.showService();
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

            const slug = window.location.pathname.substr(1,);

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
    },
}
</script>
