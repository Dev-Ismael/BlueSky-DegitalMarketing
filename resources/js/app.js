/*======= import Vue from dependencies =======*/
import { createApp } from 'vue';
// create vue app & name it var (app)
const app = createApp({});


/*========== Component ================*/
// Layouts
import main_navbar from './components/web/layouts/main_navbar.vue';
import main_header from './components/web/layouts/main_header.vue';
import min_header from './components/web/layouts/min_header.vue';
import footer_section from './components/web/layouts/footer_section.vue';
app.component('main_navbar', main_navbar);
app.component('main_header', main_header);
app.component('min_header', min_header);
app.component('footer_section', footer_section);


// Home Page
import services from './components/web/pages/home/services.vue';
import about from './components/web/pages/home/about.vue';
import pricing from './components/web/pages/home/pricing.vue';
import our_clients from './components/web/pages/home/our_clients.vue';
import youtube_video from './components/web/pages/home/youtube_video.vue';
app.component('services', services);
app.component('about', about);
app.component('pricing', pricing);
app.component('our_clients', our_clients);
app.component('youtube_video', youtube_video);


// About Page
import our_expertise from './components/web/pages/about/our_expertise.vue';
import our_features from './components/web/pages/about/our_features.vue';
import work_progress from './components/web/pages/about/work_progress.vue';
app.component('our_expertise', our_expertise);
app.component('our_features', our_features);
app.component('work_progress', work_progress);


// Contact Page
import contact_info from './components/web/pages/contact/contact_info.vue';
import contact_form from './components/web/pages/contact/contact_form.vue';
app.component('contact_info', contact_info);
app.component('contact_form', contact_form);


// Service Page
import service_details from './components/web/pages/service/service_details.vue';
app.component('service_details', service_details);


// project Page
import project_details from './components/web/pages/project/project_details.vue';
app.component('project_details', project_details);


// portfolio Page
import our_portfolio from './components/web/pages/portfolio/our_portfolio.vue';
app.component('our_portfolio', our_portfolio);


app.mount('#app');
