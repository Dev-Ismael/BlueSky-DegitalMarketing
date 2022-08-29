

/*=======  import vue router =======*/
import * as VueRouter from 'vue-router';

// Import Pages
import HomePage from '../pages/Home.vue';
import AboutPage from '../pages/About.vue';

// Routes
const routes = [
    { path: '/' , component: HomePage },
    { path: '/about' , component: AboutPage }
];


const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory('/folder/'),
    routes
});

export default router;
