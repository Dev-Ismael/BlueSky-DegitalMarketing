<template>
    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav id="navbar" class="navbar navbar-expand-lg custom-nav-3 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>
                <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        <li><a href="/"  :class="{active : currentUrl == '/' }"> <i class="fa-solid fa-house-user"></i> Home </a></li>
                        <li><a href="/about" :class="{active : currentUrl.includes('about') }"> <i class="fa-solid fa-circle-info"></i> About</a></li>
                        <li><a href="#" class="dropdown-toggle-inner" :class="{ active : currentUrl.includes('service') }"> <i class="fa-solid fa-handshake-angle"></i>
                                Services </a>
                            <ul class="sub-menu">
                                <li v-for=" service in services " :key="service.id"><a :href=" '/' + service.slug "> {{ service.title }} </a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="/portfolio" :class="{active : currentUrl.includes('portfolio') }"> <i class="fa-solid fa-sitemap"></i> Portfolio </a></li> -->
                        <li><a href="/contact" :class="{active : currentUrl.includes('contact') }"> <i class="fa-solid fa-message"></i> Contact </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->
</template>

<script>
import axios from 'axios';


    export default {
        data() {
            return {
                services: '',
                currentUrl: '',
            }
        },
        mounted() {
            this.currentUrl = window.location.pathname;
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
