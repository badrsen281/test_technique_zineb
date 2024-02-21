import './bootstrap';
import 'admin-lte/plugins/jquery/jquery.min.js';
import 'admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js';
import 'admin-lte/dist/js/adminlte.min.js';

import { createApp } from "vue";
import { createRouter, createWebHistory } from 'vue-router';

import Login from './pages/auth/Login.vue';

import ProductList from './components/Product/ProductList.vue';
import ProductForm from './components/Product/ProductForm.vue';
import Product from './components/Product/Product.vue';
import CommandeList from './components/commandes/Commande.vue';

import Test from './components/Product/test.vue';


const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/login', component: Login },

        { path: '/list-produits', component: ProductList },
        { path: '/products/create', component: ProductForm },
        { path: '/products/:id', component: Product },
        { path: '/products/:id/edit', component: ProductForm },

        { path: '/list-commandes', component: CommandeList },

        { path: '/test', component: Test },
        
    ]
});



//{ path: '/test', component: Test,  meta: { authOnly: true }, name:"test" },
// function isLoggedIn() {
//     return localStorage.getItem("auth");
//   }
  
//   router.beforeEach((to, from, next) => {
//     if (to.matched.some(record => record.meta.authOnly)) {
//       // this route requires auth, check if logged in
//       // if not, redirect to login page.
//       if (!isLoggedIn()) {
//         next({
//           path: "/login",
//           query: { redirect: to.fullPath }
//         });
//       } else {
//         next();
//       }
//     } else if (to.matched.some(record => record.meta.guestOnly)) {
//       // this route requires auth, check if logged in
//       // if not, redirect to login page.
//       if (isLoggedIn()) {
//         next({
//           path: "/dashboard",
//           query: { redirect: to.fullPath }
//         });
//       } else {
//         next();
//       }
//     } else {
//       next(); // make sure to always call next()!
//     }
//   });
  





// const app = createApp(App);
const app = createApp({});
app.use(router);
app.mount('#app');
