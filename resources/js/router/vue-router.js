

/*=======  import vue router =======*/
import { createRouter, createWebHistory } from 'vue-router'

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

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }   // at click router link vuejs go top page "vue router scroll behavior"
    }
});

export default router;
