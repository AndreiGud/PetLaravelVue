import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
    path: "/",
    component: () => import("./Pages/Index.vue"),
},
    {
        path: "/test",
        component: () => import("./Pages/TestHome.vue"),
    },
    {
        path: "/app",
        component: () => import("./Pages/NewComponent.vue"),
    }];

export default createRouter({
    history: createWebHistory(),
    routes,
});
