<template>
    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg custom-nav-3 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img v-if="darkLogo" src="/images/BlueSky-Logo.png" alt="logo" width="120" class="logo-dark img-fluid">
                    <img v-else src="/images/BlueSky-WhiteLogo.png" alt="logo" width="120" class="logo-white img-fluid">
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
                                <li><a href="/service"> service </a></li>
                                <li><a href="/service"> service </a></li>
                                <li><a href="/service"> service </a></li>
                            </ul>
                        </li>
                        <li><a href="/portfolio" :class="{active : currentUrl.includes('portfolio') }"> <i class="fa-solid fa-sitemap"></i> Portfolio </a></li>
                        <li><a href="/contact" :class="{active : currentUrl.includes('contact') }"> <i class="fa-solid fa-message"></i> Contact </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--header section end-->
</template>

<script>
    export default {
        props: {
            darkLogo: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                currentUrl: '',
                darkLogo: this.darkLogo
            }
        },
        mounted() {
            this.currentUrl = window.location.pathname;
        }
    }
</script>
