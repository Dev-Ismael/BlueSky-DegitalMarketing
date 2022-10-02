<template>

    <!------- Our Clients ----------->
    <div class="client-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="client-heading-wrap">
                        <h3>Who are Happy With Services and Work</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="client-para">
                        <p>
                            We create winning brand strategies. Translate Brand Purpose into user-centric experience innovations throughout the customer journey. We create platforms, high-performance websites, E-Commerce solutions, and mobile apps.
                        </p>
                    </div>
                </div>
            </div>

            <!--clients logo start-->
            <div v-if="clients.length > 0" class="row align-items-center justify-content-center mb-4">
                <div class="col-md-10 col-lg-9">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator client-logo-wrap">
<!--
                        <div class="item single-client">
                            <img src="img/clients-logo-01.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-02.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-03.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-04.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-05.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-06.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-07.png" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="img/clients-logo-08.png" alt="client logo" class="client-img">
                        </div> -->


                        <div class="item single-client" v-for=" client in clients " :key="client.id" >
                            <img :src="'/images/clients/' + client.img" alt="client logo" class="client-img">
                        </div>


                    </div>
                </div>
            </div>
            <!--clients logo end-->

        </div>
    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                clients: '',
            }
        },
        mounted() {
            this.showClients();
        },
        methods: {

            /*======================================================
            ====== GET Clients
            ======================================================*/
            showClients() {
                axios.get('/api/clients')
                    .then(
                        response => {
                            // console.log(response.data);
                            this.clients = response.data
                        }
                    )
                    .catch(
                        error => console.log(error)
                    )
            },

        }
    }
</script>
