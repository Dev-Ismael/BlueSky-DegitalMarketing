<template>


    <!----------- services ------------>
    <section class="promo-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary">Our Services</strong>
                        <h2>What Can We Do For You</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">
                            There are many paths to success, many routes businesses may take to reach their goals. helping our clients navigate the high seas of digital marketing.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div v-for=" service in services "  class="col-md-6 col-lg-4">
                    <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                        <div class="promo-icon mb-4">
                            <a :href=" '/service/' + service.slug ">
                                <img :src=" '/images/services/' + service.icon " alt="promo" width="220">
                            </a>
                        </div>
                        <div class="promo-info">
                            <!-- <strong class="color-secondary">Discuss with Users</strong> -->
                            <h4 class="color-secondary"> <a class="color-secondary" :href=" '/service/' + service.slug "> {{ service.title }} </a> </h4>
                            <p>{{ service.summary }}</p>
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
                services: '',
            }
        },
        mounted() {
            this.getServices();
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


        }
    }
</script>
