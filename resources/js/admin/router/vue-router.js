

/*=======  import vue router =======*/
import { createRouter, createWebHistory } from 'vue-router'

// Import Pages
import DashboardPage from '../pages/dashboard.vue';
import ServicePage from '../pages/service.vue';
import ProfilePage from '../pages/profile.vue';
import notFoundPage from '../pages/notFoundPage.vue';

// Routes
const routes = [
    { path: '/admin/profile' , component: ProfilePage },
    { path: '/admin/service' , component: ServicePage },
    { path: '/admin/dashboard' , component: DashboardPage },
    { path: "/:catchAll(.*)" , component: notFoundPage },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }   // at click router link vuejs go top page "vue router scroll behavior"
    }
});

export default router;
