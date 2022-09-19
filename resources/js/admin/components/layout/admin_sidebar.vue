<template>

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <router-link to="/admin/dashboard" class="nav-link" >
                    <i class="mdi mdi-grid-large menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </router-link>
            </li>
            <li class="nav-item nav-category">Tables</li>
            <li class="nav-item">
                <router-link to="/admin/service" class="nav-link" >
                    <i class="mdi mdi-book menu-icon"></i>
                    <span class="menu-title">Services</span>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to="/admin/messege" class="nav-link" >
                    <i class="mdi mdi-message-reply menu-icon"></i>
                    <span class="menu-title">Messeges</span>
                </router-link>
            </li>
            <li class="nav-item nav-category">Help</li>
            <li class="nav-item">
                <router-link to="/admin/seo-managment" class="nav-link" >
                    <i class="mdi mdi-file-find menu-icon"></i>
                    <span class="menu-title"> SEO Management </span>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to="/admin/settings" class="nav-link" >
                    <i class="mdi mdi-settings menu-icon"></i>
                    <span class="menu-title"> Setting </span>
                </router-link>
            </li>
        </ul>
    </nav>

</template>
