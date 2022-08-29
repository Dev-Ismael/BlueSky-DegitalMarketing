

/*=======  import vue router =======*/
import * as VueRouter from 'vue-router';

// Import Pages
import HomePage from '../pages/Home.vue';
import AboutPage from '../pages/About.vue';
import ContactPage from '../pages/Contact.vue';
import PortfolioPage from '../pages/Portfolio.vue';
import ProjectPage from '../pages/Project.vue';
import ServicePage from '../pages/Service.vue';

// Routes
const routes = [
    { path: '/' , component: HomePage },
    { path: '/about' , component: AboutPage },
    { path: '/contact' , component: ContactPage },
    { path: '/portfolio' , component: PortfolioPage },
    { path: '/project' , component: ProjectPage },
    { path: '/service' , component: ServicePage },
];

const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes
});

export default router;
