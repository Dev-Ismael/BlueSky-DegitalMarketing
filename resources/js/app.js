/*======= import Vue from dependencies =======*/
import { createApp } from 'vue';
// create vue app & name it var (app)
const app = createApp({});


/*======= import Vue router =======*/
import router from './admin/router/vue-router';
app.use(router);


/*======= Sweetalert2 =======*/
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
app.use(VueSweetalert2);


/*======= ckeditor5 =======*/
import CKEditor from '@ckeditor/ckeditor5-vue';
app.use( CKEditor );

/*====================================================
===== Import Web JS Components
====================================================*/
// Layouts
import main_navbar from './web/components/layouts/main_navbar.vue';
import main_header from './web/components/layouts/main_header.vue';
import min_header from './web/components/layouts/min_header.vue';
import footer_section from './web/components/layouts/footer_section.vue';
app.component('main_navbar', main_navbar);
app.component('main_header', main_header);
app.component('min_header', min_header);
app.component('footer_section', footer_section);

// Home Page
import services from './web/components/elements/home/services.vue';
import about from './web/components/elements/home/about.vue';
import pricing from './web/components/elements/home/pricing.vue';
import our_clients from './web/components/elements/home/our_clients.vue';
import youtube_video from './web/components/elements/home/youtube_video.vue';
app.component('services', services);
app.component('about', about);
app.component('pricing', pricing);
app.component('our_clients', our_clients);
app.component('youtube_video', youtube_video);

// About Page
import our_expertise from './web/components/elements/about/our_expertise.vue';
import our_features from './web/components/elements/about/our_features.vue';
import work_progress from './web/components/elements/about/work_progress.vue';
app.component('our_expertise', our_expertise);
app.component('our_features', our_features);
app.component('work_progress', work_progress);

// Contact Page
import contact_info from './web/components/elements/contact/contact_info.vue';
import contact_form from './web/components/elements/contact/contact_form.vue';
app.component('contact_info', contact_info);
app.component('contact_form', contact_form);

// Service Page
import service_details from './web/components/elements/service/service_details.vue';
app.component('service_details', service_details);

// project Page
import project_details from './web/components/elements/project/project_details.vue';
app.component('project_details', project_details);

// portfolio Page
import our_portfolio from './web/components/elements/portfolio/our_portfolio.vue';
app.component('our_portfolio', our_portfolio);

// Login Page
import login from './web/components/elements/login.vue';
app.component('login', login);

/*====================================================
===== Import Admin JS Components
====================================================*/
// Layout
import admin_navbar from './admin/components/layout/admin_navbar.vue';
import admin_sidebar from './admin/components/layout/admin_sidebar.vue';
app.component('admin_navbar', admin_navbar);
app.component('admin_sidebar', admin_sidebar);


app.mount('#app');
