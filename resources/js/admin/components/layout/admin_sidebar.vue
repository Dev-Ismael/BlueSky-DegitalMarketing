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
        </ul>
    </nav>

</template>
