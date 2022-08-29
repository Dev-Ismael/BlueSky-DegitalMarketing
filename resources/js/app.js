
/*======= import Vue from dependencies =======*/
import { createApp } from 'vue';
// create vue app & name it var (app)
const app = createApp({});

/*======= import Vue from dependencies =======*/
import router from './router/vue-router';
// app use vue-router
app.use(router)



/*========== Component ================*/
import HeaderComponent from './components/layouts/Header.vue';
import FooterComponent from './components/layouts/Footer.vue';

app.component('header-component', HeaderComponent);
app.component('footer-component', FooterComponent);



app.mount('#app');
