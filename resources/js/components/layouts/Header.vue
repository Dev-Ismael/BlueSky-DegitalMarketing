<template>
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg custom-nav-3 fixed-top">
            <div class="container">
                <router-link class="navbar-brand" to="/">
                    <img src="images/BlueSky-Logo.png" alt="logo" width="120" class="img-fluid">
                </router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>
                <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto menu">
                        <li> <router-link to="/">  <i class="fa-solid fa-house-user"></i> Home  </router-link></li>
                        <li> <router-link to="/about">  <i class="fa-solid fa-circle-info"></i> About  </router-link></li>
                        <!-- <li><a href="{{ route("home") }}"> <i class="fa-solid fa-house-user"></i> Home</a></li> -->
                        <!-- <li><a href="{{ route("about") }}"> <i class="fa-solid fa-circle-info"></i> About</a></li> -->
                        <!-- <li><a href="#" class="dropdown-toggle-inner"> <i class="fa-solid fa-handshake-angle"></i> Services </a>
                            <ul class="sub-menu">
                                <li><a href="{{ route("service") }}"> service </a></li>
                                <li><a href="{{ route("service") }}"> service </a></li>
                                <li><a href="{{ route("service") }}"> service </a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route("portfolio") }}"> <i class="fa-solid fa-sitemap"></i> Portfolio </a></li>
                        <li><a href="{{ route("contact") }}"> <i class="fa-solid fa-message"></i> Contact Us</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>
