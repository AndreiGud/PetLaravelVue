import { createRouter, createWebHistory } from "vue-router";
import Index from './Pages/Index.vue';
import ProductCreate from './Pages/ProductCreate.vue';
import ProductList from "./Pages/ProductList.vue";
import ProductEdit from "./Pages/ProductEdit.vue";

const routes = [
    {
        path: "/",
        name: 'index',
        component: Index,
},
    {
        path: "/product/create",
        name: 'product_create',
        component: ProductCreate,
    },
    {
        path: "/product/list",
        name: 'product_list',
        component: ProductList,
    },
    {
        path: "/product/:id/edit",
        name: 'product_edit',
        component: ProductEdit,
    },


];

export default createRouter({
    history: createWebHistory(),
    routes,
});
