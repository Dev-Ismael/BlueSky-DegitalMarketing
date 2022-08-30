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
                        <li> <router-link to="/about">  <i class="fa-solid fa-circle-info"></i> About </router-link></li>
                        <li><a href="#" class="dropdown-toggle-inner prevent-defualt"> <i class="fa-solid fa-handshake-angle"></i> Services </a>
                            <ul class="sub-menu">
                                <li><router-link to="/service"> service </router-link></li>
                            </ul>
                        </li>
                        <li><router-link to="/portfolio"> <i class="fa-solid fa-sitemap"></i> Portfolio </router-link></li>
                        <li><router-link to="/contact"> <i class="fa-solid fa-message"></i> Contact Us </router-link></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>
